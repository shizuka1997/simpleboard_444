@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')
    @if (session('message'))
        {{ session('message') }}
    @endif

    {{ $post->title }}
    {{ $post->content }}
@endsection

    <a href="/posts/{{ $post->id }}/edit">Edit</a>
