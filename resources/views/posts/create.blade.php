@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>

    {!! Form::open([
        'action' => 'PostsController@store',
        'method' => 'POST',
        'enctype' => 'multipart/form-data',
    ]) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text(
                'title',  // name
                '',  // value
                [
                    'class' => 'form-control', 
                    'placeholder' => 'Title'
                ]) 
            }}
        </div>
        
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea(
                'body',  // name
                '',  // value
                [
                    'class' => 'form-control', 
                    'placeholder' => 'Your content here...'
                ]) 
            }}
        </div>

        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>

        {{ Form::submit('Submit', [
            'class' => 'btn btn-secondary'
        ]) }}
    {!! Form::close() !!}
    
@endsection