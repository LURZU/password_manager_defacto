
@extends('base')


@section('title', 'Mon blog')

@section('content')



    <div class="container mx-auto my-12">
        <div class="flex flex-wrap -mx-4">
        @foreach ($posts as $post)
               
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <a href="{{route('blog.show', ['slug'=> $post->slug, 'post' => $post->id])}}">
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            @if($post->image)
                            <img src="{{$post->imageUrl()}}" alt="Image de l'article" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-4">
                                <div class="flex"> 
                                    <p class="mr-4">
                                        @if($post->category)
                                        Categorie : {{$post->category?->name}}
                                        @endif
                                    </p>
                                     @if(!$post->tags->isEmpty()) 
                                     <p>Tags : 
                                        @foreach($post->tags as $tag)
                                        <span class="badge text-xs bg-gray-300 rounded px-1 py-1">{{$tag->name}}</span>
                                        @endforeach
                                    </p>
                                        @endif
                                </div>
                                <h2 class="text-xl font-bold mb-2"><a href="#" class="hover:text-blue-500">{{ $post->name }}</a></h2>
                                <p class="text-gray-700 text-base">{{ $post->content }}</p>
                            </div>
                        </div>
                    </a>
                    </div>
        @endforeach
       
        </div>
    <div>
        {{$posts->links()}}

            

@endsection

