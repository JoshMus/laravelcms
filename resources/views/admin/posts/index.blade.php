@extends('layouts.app')

@section('content')

<div class="container">
<h1>Posts</h1>

<table class="table table-hover">
  <thead class="thead-dark bg-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Photo</th>
      <th scope="col">Owner</th>
      <th scope="col">Catagory</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Date Created</th>
      <th scope="col">Date Updated</th>
    </tr>
  </thead>
  <tbody>

@if($posts)
    @foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/50x50'}}" alt=""></td>
      <td>{{$post->user->name}}</td>
      <td>{{$post->category ? $post->category->name : 'N/A' }}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->created_at->diffForHumans()}}</td>
      <td>{{$post->updated_at->diffForHumans()}}</td>
    </tr>

    @endforeach
@endif
  </tbody>
</table>
</div>
@stop