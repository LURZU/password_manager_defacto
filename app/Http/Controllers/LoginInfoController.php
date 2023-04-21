<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class LoginInfoController extends Controller
{
    public function index(Clients $client)
    {
        $loginInfos = $client->loginInfos()->get();
        return view('admin.clients_log.index', compact('loginInfos', 'client'));
    }

    public function create(Clients $client)
    {
        return view('admin.clients_log.create', compact('client'));
    }

    public function store($client_id, Request $request)
    {
        $validatedData = $request->validate([
            'platform.*' => 'required|string|max:255',
            'platform_link.*' => 'required|url',
            'login.*' => 'required|string|max:255',
            'password.*' => 'required|string|max:255',
        ]);
    
        foreach($validatedData['platform'] as $key => $platform) {
            $loginInfo = new LoginInfo();
            $loginInfo->platform = $platform;
            $loginInfo->platform_link = $validatedData['platform_link'][$key];
            $loginInfo->login = $validatedData['login'][$key];
            $loginInfo->password = bcrypt($validatedData['password'][$key]);
            $loginInfo->client_id = $client_id;
            $loginInfo->save();
        }
    
        return redirect()->route('admin.clients_log.create', $client_id)->with('success', 'Login Info added successfully');
    }
    



}
