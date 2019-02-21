<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;
use App\Carousel;
use App\Project;

class WelcomeController extends Controller
{
    public function index() {
        
        // Choisir aléatoirement une rangée du tableau (un user)
        $random1 = User::inRandomOrder()->having('id', '>', 1)->take(1)->get(); 
        $random2 = User::inRandomOrder()->having('id', '>', 1)->take(1)->get();
        
        // Choisir la première rangée du tableau.
        $notrandom = User::first();
        $client = Client::all();

        // Carousel
        $carousel = Carousel::all();

        // Choisir aléatoirement un projet
        $random3 = Project::inRandomOrder()->take(1)->get();
        $random4 = Project::inRandomOrder()->take(1)->get();
        $random5 = Project::inRandomOrder()->take(1)->get();
        
        return view('welcome', 
            compact('random1',
                    'random2',
                    'random3',
                    'random4',
                    'random5',
                    'notrandom',
                    'client',
                    'carousel'
            ));
    }
}
