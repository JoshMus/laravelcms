@extends('layouts.app')

@section ('content')
<div class="container">

<h1>Create Post</h1>

{!! Form::open(['method'=>'POST','action'=>['AdminPostsController@store', 'files'=>true]]) !!}


  <div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('catagory_id', 'Category:') !!}
    {!! Form::select('catagory_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('photo_id', 'File:') !!}<br>
    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Create Post', ['class'=>'btn btn-primary ']) !!}
</div>
{!! Form::close() !!}

</div>

<div class="container">
    @include('layouts.form_error')
</div>



@stop