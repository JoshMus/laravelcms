@extends('layouts.app')

@section('content')

<div class="container">
<h1>Display Users</h1>

<table class="table table-hover">
  <thead class="thead-dark bg-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">Date Created</th>
    </tr>
  </thead>
  <tbody>

@if($users)
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role->name}}</td>
      <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
    </tr>

    @endforeach
@endif
  </tbody>
</table>

@stop

</div>