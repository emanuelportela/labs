@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3 mt-3 mb-2">EDIT CLIENT</h1>
@stop

@section('content')

   <form action="{{ route('client.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST')

      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">Name</th>
               <th scope="col">Function</th>
               <th scope="col">Testimony</th>
               <th scope="col">Image</th>
               <th scope="col">Method</th>

            </tr>
         </thead>
            <tbody>
               <tr>
                  <td><input type="text" name="name"></td>
                  <td><input type="text" name="role"></td>
                  <td><input type="text" name="testimony"></td>
                  <td>
                     <input type="file" class="form-control custom-file" name="image">
                  </td>
                  <td><button class="btn btn-success" type="submit">CREATE</button></td>
               </tr>
            </tbody>

      </table>

<a href="{{ route('home') }}" class="btn btn-secondary ml-3 mt-4">HOME</a>
<a href="{{ route('client.index') }}" class="btn btn-info ml-1 mt-4">CLIENT</a>

@stop