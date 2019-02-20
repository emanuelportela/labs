@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>EDIT YOUR CAROUSEL</h1>
@stop

@section('content')

   <form action="{{route('carousel.update', ['carousel' => $carousel->id])}}" method="POST" enctype="multipart/form-data">

      @method('PUT')
      @csrf
         
         <img src="{{Storage::disk('image')->url($carousel->image)}}" class="card-img-top">
      
         <input type="file" class="form-control custom-file" name="image">

      <button type="submit" class="btn btn-success mt-3">UPDATE</button>

   </form>
   
   <a href="{{ route('home')}}" class="btn btn-secondary mt-3 mr-2">HOME</a>
   <a href="{{ route('carousel.index')}}" class="btn btn-info mt-3">CAROUSELS</a>

@stop