@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="ml-3 mt-3 mb-2">Profiles</h1>
@stop

@section('content')
<div class="container">
    <table class="table table-striped">
        
    <thead>
        <tr>
        <th scope="col">Picture</th>
        <th scope="col">Name</th>
        <th scope="col">User_id</th>
        <th scope="col">Role</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profils as $profile)
            <tr>
                <th scope="row">
                    <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; border: 2px solid #4780BE;">
                        <img src="{{Storage::disk('image')->url($profile->image)}}" alt="" style="width:100%;">
                    </div>
                </th>
                <td>{{$profile->firstname}} {{$profile->name}}</td>
                <td>{{$profile->user_id}}</td>
                <td>{{$profile->user->role->name}}</td>
                <td>{{$profile->user->email}}</td>
                <td>
                  <a href="{{route('profil.show', ['profil' => $profile->id])}}" class="btn btn-md btn-primary">Show</a>
                </td>
                <td>
                  <a href="{{route('profil.edit', ['profil' => $profile->id])}}" class="btn btn-md btn-warning">Edit</a>
                </td>
                <td>
                  <form action="{{ route('profil.destroy',['id'=>$profile->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-md btn-danger">DELETE</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="{{ route('home') }}" class="btn btn-secondary ml-3 mt-4">HOME</a>
<a href="{{route('user.index')}}" class="btn btn-info ml-1 mt-4">USERS</a>

@stop