@extends('layout')

@section('content')
    <h1>Posts</h1>
    <ul>
        <li>{{ $post->title }}</li>
        <li>{{ $post->content }}</li>
        <li>{{ $post->author }}</li>
    </ul>
@endsection

