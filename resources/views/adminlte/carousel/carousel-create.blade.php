@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE CAROUSEL</h1>
@stop

@section('content')

   <form action="{{route('carousel.store')}}" method="POST" enctype="multipart/form-data">
      @method('POST')
      @csrf
         
         <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control custom-file" name="image">
         </div>

      <button type="submit" class="btn btn-success">CREATE</button>

      </form>
   
   <a href="{{ route('home')}}" class="btn btn-secondary mt-3 mr-2">HOME</a>
   <a href="{{ route('carousel.index')}}" class="btn btn-info mt-3">CAROUSELS</a>

@stop