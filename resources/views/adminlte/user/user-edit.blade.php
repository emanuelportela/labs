@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>EDIT USER</h1>
@stop

@section('content')

   <form action="{{ route ('user.update', ['user'=>$user->id])}}" method="POST" >
      @method('PUT')
      @csrf
   
      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
               <th scope="col">Email</th>
               <th scope="col">Password</th>
               <th scope="col">Actions</th>
            </tr>
         </thead>
           
         <tbody>
            <tr>
               <th scope="row">{{$user->id}}</th>
               
               

               <td>
                  <input type="text" name="email" value='{{old('email',$user->email)}}'>
                  @if($errors->has('email'))
                     @foreach($errors->get('email') as $error)
                        <div class="text-danger">{{$error}}</div>
                     @endforeach
                  @endif 
               </td>
               
               <td>
                  <input type="text" name="password" value='{{old('password',$user->password)}}'>
                  @if($errors->has('password'))
                     @foreach($errors->get('password') as $error)
                        <div class="text-danger">{{$error}}</div>
                     @endforeach
                  @endif 
               </td>
               
               <td>
                  <button class="btn btn-warning" type="submit">UPDATE</button>
               </td>
            </tr>
         </tbody>
      </table>
   </form>

   <a href="{{ route('home')}}" class="btn btn-secondary mt-1 mr-2">HOME</a>
   <a href="{{ route('user.index')}}" class="btn btn-info mt-1">USERS</a>

@stop