<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('Clients.Clients' , compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clients.CreateClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $clientRequest) : RedirectResponse
    {
        $formFields = $clientRequest->validated();
        $formFields['Password_Client'] = Hash::make($clientRequest->Password_Client);
        Client::create($formFields);           
        
        return redirect()->route('clients.index')->with('info', 'Le client a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('Clients.EditClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $clientRequest, Client $client): RedirectResponse 
    { 
        $client->update( $clientRequest->all() ); 

        return redirect()->route('clients.index')->with('info', 'Le client a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client): RedirectResponse 
    { 
        $client->delete();

        return back()->with('info', 'Le client a bien été supprimé dans la base de données.');
    }
}
