<?php

namespace App\Http\Controllers;

use App\Client;
use App\Room;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $rooms   = Room::all();
        return view ('client.index',compact('clients', 'rooms')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Client::create($request->all());
        if (Auth::check()) {
            return redirect('/client');
        }
        $lastInsertId = DB::getPdo()->lastInsertId();
        $client = Client::find($lastInsertId);
        //dd($client);
        $rooms   = Room::all();
        return view('client.reservation', compact('client', 'rooms'));
        //return redirect(route('client.reservation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $clients = Client::all();
        return view('client.show', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        return view('client.edit', ['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return redirect(route('client.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect(route('client.index'));
    }

    public function reservation()
    {   
        return view('client.reservation');
    }
    public function selectRoom(Request $request, Client $client){

        //dd($request);
        
        $client->rooms()->attach($request->id, ['From'=>$request->Date_From, 'To'=>$request->Date_To]);

        return redirect(route('client.index'));
    }
    
    public function liberateRoom(Client $client){

        //dd($request);
        
        $client->rooms()->detach();

        return redirect(route('client.index'));
    }
}
