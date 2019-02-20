@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3">Carousels</h1>
@stop

@section('content')
<div class="container">
    <table class="table table-striped">
    <thead>
        <td colspan="4">
          <a href="{{route('carousel.create')}}" style="display:block;" class="btn btn-info d-block">Ajouter un carousel</a>
        </td>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carousel as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>
                    <div style="width: 200px; height: 120px; border-radius: 25px; overflow: hidden; border: 2px solid #4780BE;">
                        <img src="{{Storage::disk('image')->url($item->image)}}" style="height:100%;">
                    </div>
                </td>
                <td>
                    <a href="{{route('carousel.edit', ['carousel' => $item->id])}}" class="btn btn-success">SHOW</a>
                </td>
                <td>
                    <form action="{{route('carousel.destroy', ['carousel' => $item->id])}}" style="display: inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    
    <a href="{{ route('home') }}" class="btn btn-secondary mt-3">HOME</a>
</div>

@stop