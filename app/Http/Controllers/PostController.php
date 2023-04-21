<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;
// use App\Http\Requests\BlogFilterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\Http\Requests\CreatePostRequest;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\UploadedFile;

class PostController extends Controller
{

    public function create(): View
    {
        $post = new Post();
        
        return view('blog.create', [
            'post' => $post,
            'categories' => Category::select('id', 'name')->get(),
            'tags' => Tag::select('id', 'name')->get()
        ]);
    }

    public function store(CreatePostRequest $request) {

       $post = Post::create($request->validated());
       $post->tags()->sync($request->validated(['tags']));
        return redirect()->route('blog.show', [
            'slug' => $post->slug,
            'post' => $post->id
        ])->with('success', 'Article créer avec succès !');
    }

    public function index(): View {
        return view('blog.index', ['posts' => Post::with('tags', 'category')->paginate(6)]);
    }

    public function show(string $slug, Post $post): RedirectResponse | View | Post
    {
        if($post->slug !== $slug) {
            return to_route('blog.show', [
                'slug' => $post->slug,
                'id' => $post->id
            ]);
        } 
       
            return view('blog.show', ['post' => $post]);   
    }

    public function edit(Post $post): View
    {
        return view('blog.edit', [
            'post' => $post,
            'categories' => Category::select('id', 'name')->get(),
            'tags' => Tag::select('id', 'name')->get()
        ]);
            
    }

    public function update(Post $post, CreatePostRequest $request): RedirectResponse
    {
        $data = $request->validated();
        /**
         * @var UploadedFile|null $image
         */
        $image = $request->validated('image');
        if($image !== null && !$image->getError()) {
              // Assuming that $request->file('image') is the uploaded file
              $path = $request->file('image')->storeAs('public/blog', $image->getClientOriginalName());
              $post->imagePath = $path;
              $post->save();
                
        }
        $post->update($request->validated());
        $post->tags()->sync($request->validated(['tags']));

        return redirect()->route('blog.show', [
            'slug' => $post->slug,
            'post' => $post->id
        ])->with('success', 'Article modifié avec succès !');
    }
}
