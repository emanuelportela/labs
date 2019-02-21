@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3 mt-3 mb-2">One Project</h1>
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
            <th scope="col">Method</th>
         </tr>
      </thead>
         <tbody>
            <tr>
               <th scope="row">{{ $project->id }}</th>
               <td><div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; border: 2px solid #4780BE;">
                  <img src="{{Storage::disk('image')->url($project->image)}}" alt="" style="width:100%; height:100%">
               </div></td>
               <td>{{ $project->name }}</td>
               <td><div style="width: 40px; height: 40px; border-radius: 25%; overflow: hidden; border: 2px solid black;">
                     <img src="{{Storage::disk('image')->url($project->icon)}}" alt="" style="width:100%; height:100%">
                  </div></td>
               <td>{{ $project->description }}</td>
               <td>
                     <a href="{{route('project.edit',['id'=>$project->id])}}" class="btn btn-warning">EDIT</a>
               </td>
            </tr>
         </tbody>

   </table>

<a href="{{ route('home') }}" class="btn btn-secondary ml-3 mt-4">HOME</a>
<a href="{{ route('project.index') }}" class="btn btn-info ml-1 mt-4">PROJECT</a>

@stop