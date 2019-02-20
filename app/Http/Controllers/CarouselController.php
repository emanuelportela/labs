<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;
use Storage;
use Image;
use Intervention;

class CarouselController extends Controller {
    public function index() {
        $carousel = Carousel::all();
        return view('adminlte.carousel.carousel', compact('carousel'));
    }

    public function create() {
        return view('adminlte.carousel.carousel-create');
    }

    public function store(Request $request) {
        $newcarousel = new Carousel;
        $newcarousel->image = $request->image->store('', 'image');
        $img = Image::make(Storage::disk('image')->path($newcarousel->image))->resize(1284,578); 
        $img->save();
        



        $newcarousel->save();
        return view('home');
    }

    public function show(Carousel $carousel) {
        return view('adminlte.carousel.carousel-show', compact('carousel'));
    }

    public function edit(Carousel $carousel) {
        return view('adminlte.carousel.carousel-edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel) {

        if(isset($request->image)){
            $carousel->image = $request->image->store('', 'image');
            $path = Storage::disk('image')->path($carousel->image);
            $img = Image::make($path)->resize(1284,578);    
            $img->save();
        }

        $carousel->save();

        return view('home');
    }

    public function destroy(Carousel $carousel) {
        $carousel->delete();
        return redirect()->back();
    }
}
