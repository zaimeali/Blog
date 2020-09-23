@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <div class="jumbotron mt-4">
        <h1>{{ $post->title }}</h1>
        <div class="row">
            <div class="col-md-12">
                <img style="width: 100%;" src="/storage/cover_images/{{ $post->cover_image }}" alt="{{ $post->cover_image }}">
            </div>
        </div>
        <p>{{ $post->body }}</p>
        <hr>
        <small>{{ $post->created_at }}</small>
        @if (!Auth::guest())
            @if (auth()->user()->id === $post->id)
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
            @endif
        @endif
    </div>
@endsection