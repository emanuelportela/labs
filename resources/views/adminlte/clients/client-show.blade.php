@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3 mt-3 mb-2">One Client</h1>
@stop

@section('content')

   <table class="table">
      <thead class="thead-dark">
         <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Testimony</th>
            <th scope="col">Method</th>
         </tr>
      </thead>
         <tbody>
            <tr>
               <th scope="row">{{ $client->id }}</th>
               <td><div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; border: 2px solid #4780BE;">
                  <img src="{{Storage::disk('image')->url($client->image)}}" alt="" style="width:100%;">
               </div></td>
               <td>{{ $client->name }}</td>
               <td>{{ $client->role }}</td>
               <td>{{ $client->testimony }}</td>
               <td>
                     <a href="{{route('client.edit',['id'=>$client->id])}}" class="btn btn-warning">EDIT</a>
               </td>
            </tr>
         </tbody>

   </table>

<a href="{{ route('home') }}" class="btn btn-secondary ml-3 mt-4">HOME</a>
<a href="{{ route('client.index') }}" class="btn btn-info ml-1 mt-4">CLIENT</a>

@stop