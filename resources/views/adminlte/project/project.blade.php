@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<h1>Projects</h1>

@stop

@section('content')

   <table class="table">
      <thead class="thead-dark">
         <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Icon</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
            <th scope="col">Method</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      @foreach ($project as $item)
         <tbody>
            <tr>
               <th scope="row">{{ $item->id }}</th>
               <td><div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; border: 2px solid #4780BE;">
                  <img src="{{Storage::disk('image')->url($item->image)}}" style="width:100%; height:100%">
               </div></td>
               <td>{{ $item->name }}</td>
               <td><div style="width: 40px; height: 40px; border-radius: 25%; overflow: hidden; border: 2px solid black;">
                     <img src="{{Storage::disk('image')->url($item->icon)}}" style="width:100%; height:100%">
                  </div></td>
               <td>{{ $item->description }}</td>
               <td>
                     <a href="{{route('project.show', ['id'=>$item->id])}}" class="btn btn-success">READ</a>
               </td>
               <td>
                     <a href="{{route('project.edit',['id'=>$item->id])}}" class="btn btn-warning">EDIT</a>
               </td>
               <td>
                     <form action="{{ route('project.destroy',['id'=>$item->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                     </form>
               </td>
            </tr>
         </tbody>
      @endforeach

   </table>

<a href="{{ route('home') }}" class="btn btn-secondary ml-3 mt-4">HOME</a>
<a href="{{ route('project.create') }}" class="btn btn-info ml-1 mt-4">CREATE</a>

@stop