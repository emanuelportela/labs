@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>EDIT YOUR INSTAGRAM'S PICTURE</h1>
@stop

@section('content')

   <form action="{{route('instagram.update', ['instagram' => $instagram->id])}}" method="POST" enctype="multipart/form-data">

      @method('PUT')
      @csrf
         
         <img src="{{Storage::disk('image')->url($instagram->image)}}" class="card-img-top" style="width: 113px; height: 111px">
      
         <input type="file" class="form-control custom-file" name="image">

      <button type="submit" class="btn btn-success mt-3">UPDATE</button>

   </form>
   
   <a href="{{ route('home')}}" class="btn btn-secondary mt-3 mr-2">HOME</a>
   <a href="{{ route('instagram.index')}}" class="btn btn-info mt-3">INSTAGRAM</a>

@stop