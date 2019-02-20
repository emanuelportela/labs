@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3 mt-3 mb-2">Clients</h1>
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
            <th scope="col"></th>
            <th scope="col">Method</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      @foreach ($client as $item)
         <tbody>
            <tr>
               <th scope="row">{{ $item->id }}</th>
               <td><div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; border: 2px solid #4780BE;">
                  <img src="{{Storage::disk('image')->url($item->image)}}" alt="" style="width:100%;">
               </div></td>
               <td>{{ $item->name }}</td>
               <td>{{ $item->role }}</td>
               <td>{{ $item->testimony }}</td>
               <td>
                     <a href="{{route('client.show', ['id'=>$item->id])}}" class="btn btn-success">READ</a>
               </td>
               <td>
                     <a href="{{route('client.edit',['id'=>$item->id])}}" class="btn btn-warning">EDIT</a>
               </td>
               <td>
                     <form action="{{ route('client.destroy',['id'=>$item->id])}}" method="post">
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
<a href="{{ route('client.create') }}" class="btn btn-info ml-1 mt-4">CREATE</a>

@stop