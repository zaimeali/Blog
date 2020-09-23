@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <div class="jumbotron mt-4">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <hr>
        <small>{{ $post->created_at }}</small>
        <hr>
        <div class="d-flex justify-content-between w-25">
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit this Post</a>
            {!!
                Form::open(
                    [
                        'action' => [
                            'PostsController@destroy',
                            $post->id,
                        ],
                        'method' => 'POST',
                        'class' => 'pull-right',
                    ]
                )
            !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Post', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection