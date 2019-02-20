@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3 mt-3 mb-2">EDIT CLIENT</h1>
@stop

@section('content')

   <form action="{{ route ('client.update', ['client'=>$client->id])}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf

      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Role</th>
               <th scope="col">Testimony</th>
               <th scope="col">Image</th>
               <th scope="col">Method</th>

            </tr>
         </thead>
            <tbody>
               <tr>
                  <th scope="row">{{ $client->id }}</th>
                  <td><input type="text" name="name" value="{{ $client->name }}"></td>
                  <td><input type="text" name="role" value="{{ $client->role }}"></td>
                  <td><input type="text" name="testimony" value="{{ $client->testimony }}"></td>
                  <td>
                     <input type="file" class="form-control custom-file" name="image">
                  </td>
                  <td><input type="submit" class="btn btn-success" value="UPDATE"></td>
               </tr>
            </tbody>

      </table>

<a href="{{ route('home') }}" class="btn btn-secondary ml-3 mt-4">HOME</a>
<a href="{{ route('client.index') }}" class="btn btn-info ml-1 mt-4">CLIENT</a>

@stop