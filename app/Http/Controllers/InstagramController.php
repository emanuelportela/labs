<?php

namespace App\Http\Controllers;

use App\Instagram;
use Illuminate\Http\Request;
use Storage;
use Image;
use Intervention;

class InstagramController extends Controller {
    public function index() {
        $instagram = Instagram::all();
        return view('adminlte.instagram.instagram', compact('instagram'));
    }

    public function create() {
        return view('adminlte.instagram.instagram-create');
    }

    public function store(Request $request) {
        $newinstagram = new Instagram;
        $newinstagram->image = $request->image->store('', 'image');
        $img = Image::make(Storage::disk('image')->path($newinstagram->image))->resize(113,111); 
        $img->save();

        $newinstagram->save();
        return view('home');
    }

    public function show(Instagram $instagram) {
        return view('adminlte.instagram.instagram-show', compact('instagram'));
    }

    public function edit(Instagram $instagram) {
        return view('adminlte.instagram.instagram-edit', compact('instagram'));
    }

    public function update(Request $request, Instagram $instagram) {

        if(isset($request->image)){
            $instagram->image = $request->image->store('', 'image');
            $path = Storage::disk('image')->path($instagram->image);
            $img = Image::make($path)->resize(113,111);    
            $img->save();
        }

        $instagram->save();

        return view('home');
    }

    public function destroy(Instagram $instagram) {
        $instagram->delete();
        return redirect()->back();
    }
}
