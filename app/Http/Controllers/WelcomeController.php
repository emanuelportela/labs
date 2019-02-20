<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;

class WelcomeController extends Controller
{
    public function index() {
        
        // Choisir aléatoirement une rangée du tableau (un user)
        $random1 = User::inRandomOrder()->take(1)->get(); 
        $random2 = User::inRandomOrder()->take(1)->get();
        
        // Choisir la première rangée du tableau.
        $notrandom = User::first();
        $client = Client::all();
        
        return view('welcome', compact('random1','random2','notrandom','client'));
    }

}
