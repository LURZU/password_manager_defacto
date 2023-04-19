<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;


class AuthController extends Controller
{
    
    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('blog.index'));
        }

        return to_route('auth.login')->withErrors(
            [
                'email' => 'Email incorrect',
                'password' => 'Mot de passe invalide'
            ]
        )->onlyInput('email', 'password');
    }

        //Deconnexion
        public function logout(Request $request)
        {
            Auth::logout();
            return redirect()->route('auth.login');
        }

    //debug
    public function showForm()
    {
        $client = new Client();
        return view('clients.form', compact('client'));
    }

    //debug
    public function processForm(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        dd($client);
    }



}

