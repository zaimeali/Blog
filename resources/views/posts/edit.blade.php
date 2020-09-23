@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    {!! Form::open([
        'action' => ['PostsController@update', $post->id],
        'method' => 'PUT',
        'enctype' => 'multipart/form-data'
    ]) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text(
                'title',  // name
                $post->title,  // value
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
                $post->body,  // value
                [
                    'class' => 'form-control', 
                    'placeholder' => 'Your content here...'
                ]) 
            }}
        </div>

        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>

        {{ Form::hidden('_method', 'PUT') }}

        {{ Form::submit('Submit', [
            'class' => 'btn btn-secondary'
        ]) }}
    {!! Form::close() !!}
    
@endsection