@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('deleted_user'))
<div class="alert alert-info" role="alert">
{{session('deleted_user')}}
</div>
@endif

@if(Session::has('update_user'))
<div class="alert alert-info" role="alert">
{{session('update_user')}}
</div>
@endif

@if(Session::has('create_user'))
<div class="alert alert-info" role="alert">
{{session('create_user')}}
</div>
@endif

<h1>Display Users</h1>

<table class="table table-hover">
  <thead class="thead-dark bg-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">Date Created</th>
      <th scope="col">Date Updated</th>
    </tr>
  </thead>
  <tbody>

@if($users)
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/50x50'}}" alt=""></td>
      <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
      <td>{{$user->email}}</td>
      <td>{{$user->role->name}}</td>
      <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
      <td>{{$user->updated_at->diffForHumans()}}</td>
    </tr>

    @endforeach
@endif
  </tbody>
</table>

@stop

</div>