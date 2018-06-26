@extends('layouts.app')

@section ('content')
<div class="container">
<h1>Create Users</h1>

{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@create'])!!}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('is_active', array(1 => 'active',0 =>'Not Active'), 0, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>



<div class="form-group">
  
    {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
</div>
</div>
{!! Form::close() !!}


@stop