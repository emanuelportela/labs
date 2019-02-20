<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Storage;
use Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $client = Client::all();
        return view('adminlte.clients.client', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('adminlte.clients.client-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $newclient = new Client;
        $newclient->name = $request->name;
        $newclient->role = $request->role;
        $newclient->testimony = $request->testimony;
        $newclient->image = $request->image->store('', 'image');
        $newclient->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client) {
        return view('adminlte.clients.client-show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client) {
        return view('adminlte.clients.client-edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client) {
        $client->name = $request->name;
        $client->role = $request->role;
        $client->testimony = $request->testimony;

        if(isset($request->image)){
            $client->image = $request->image->store('', 'image');
            $path = Storage::disk('image')->path($client->image);
            $img = Image::make($path)->resize(360,448);    
            $img->save();
        }

        $client->save();

        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client) {
        $client->delete();
        return redirect()->back();
    }
}
