@extends('layouts.app')

@section('title', 'Service')

@section('content')
    Service Page
    @if (count($services))
        <ul>
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
        </ul>
    @endif
@endsection
        
