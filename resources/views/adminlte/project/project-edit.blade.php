@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3 mt-3 mb-2">EDIT PROJECT</h1>
@stop

@section('content')

   <form action="{{ route ('project.update', ['project'=>$project->id])}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf

      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Description</th>
               <th scope="col">Image</th>
               <th scope="col">Icon</th>
               <th scope="col">Method</th>

            </tr>
         </thead>
            <tbody>
               <tr>
                  <th scope="row">{{ $project->id }}</th>
                  <td><input type="text" name="name" value="{{ $project->name }}"></td>
                  <td><input type="text" name="description" value="{{ $project->description }}"></td>
                  <td><input type="file" class="custom-file" name="image"></td>
                  <td><input type="file" class="custom-file" name="icon"></td>
                  <td><input type="submit" class="btn btn-success" value="UPDATE"></td>
               </tr>
            </tbody>

      </table>

<a href="{{ route('home') }}" class="btn btn-secondary ml-3 mt-4">HOME</a>
<a href="{{ route('project.index') }}" class="btn btn-info ml-1 mt-4">PROJECT</a>

@stop