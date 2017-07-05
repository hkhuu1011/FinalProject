@extends('layouts.app')

@section('content')
    <h1>Search</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('Ingredients', 'List Ingredients:')}}
            {{Form::text('Ingredients', '', ['class' => 'form-control', 'placeholder' => 'What you already have...'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection