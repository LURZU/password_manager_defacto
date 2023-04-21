<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clients;
use App\Models\Roles;
use Illuminate\View\View;
use App\Http\Requests\CreateClientAdminRequest;



class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
            // Récupérer tous les clients et les passer à la vue
            return view('admin.properties.index', ['clients' => Clients::all()])->paginate(30);
    }

    public function showClients() 
    {
        $clients = Clients::all();
        return view('admin.properties.clients', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.properties.create', [
            'client' => new Clients(),
        
        ]);
    }
    
    public function store(CreateClientAdminRequest $request)
    {
        $client = new Clients;
        $client->name = $request->validated()['name'];
        $client->mail = $request->validated()['mail'];
        $client->save();
    
        return redirect()->route('admin.clients')->with('success', 'Le client a été créé avec succès.');
    }
    
    
    
    
        public function loginInfo($clientId)
    {
        $client = Client::find($clientId);
        $loginInfo = LoginInfo::where('client_id', $clientId)->first();
        return view('clients.login-info', ['client' => $client, 'loginInfo' => $loginInfo]);
    }

    /**
     * Display the specified resource.
     */
    public function show(clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clients $client)
    {
        return view('admin.properties.edit', compact('client'));
    }

    public function update(Request $request, Clients $client)
    {
        $request->validate([
            'name' => 'required|max:255',
            'mail' => 'required|email',
        ]);

        $client->name = $request->input('name');
        $client->mail = $request->input('mail');
        $client->save();

        return redirect()->route('admin.clients')->with('success', 'Les informations du client ont été modifiées avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Clients::findOrFail($id);
        $client->delete();
        return redirect()->route('admin.clients')->with('success', 'Le client a été supprimé avec succès.');
    }
    
}
