@extends('layouts.app')

@section ('content')
<div class="container">

<h1>Edit Users</h1>

{!! Form::model($user, ['method'=>'PATCH','action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

<div class="row">
  <div class="col-8">
  <div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>
  </div>
  <div class="col-4">
  <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/150x150'}}" height="150" alt="" class="img-responsive rounded">
  </div>
</div>





<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('is_active', 'Status:') !!}
    {!! Form::select('is_active', array(1 => 'active',0 =>'Not Active'), null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('photo_id', 'File:') !!}<br>
    {!! Form::file('photo_id', null, ['class'=>'form-control btn btn-primary']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>



<div class="form-group">
  
    {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
</div>
</div>
{!! Form::close() !!}



@include('layouts.form_error')

@stop