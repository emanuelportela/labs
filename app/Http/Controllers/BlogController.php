<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instagram;

class BlogController extends Controller {
    public function index() {
        
        // Choisir aléatoirement 6 images instagram
        $random1 = Instagram::inRandomOrder()->take(6)->get(); 
        
        return view('blog', compact('random1'));
    }
}
