@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3">INSTAGRAM PICTURES</h1>
@stop

@section('content')
<div class="container">
    <table class="table table-striped">
    <thead>
        <td colspan="4">
          <a href="{{route('instagram.create')}}" style="display:block; color:white;" class="btn btn-info d-block">ADD AN INSTAGRAM'S PICTURE</a>
        </td>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($instagram as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>
                    <div style="width: 113px; height: 111px; overflow: hidden; border: 2px solid #4780BE;">
                        <img src="{{Storage::disk('image')->url($item->image)}}" style="height:100%;">
                    </div>
                </td>
                <td>
                    <a href="{{route('instagram.edit', ['instagram' => $item->id])}}" class="btn btn-success">SHOW</a>
                </td>
                <td>
                    <form action="{{route('instagram.destroy', ['instagram' => $item->id])}}" style="display: inline" method="POST">
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