@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <div class="jumbotron mt-4">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <hr>
        <small>{{ $post->created_at }}</small>
        <hr>
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit this Post</a>
    </div>
@endsection