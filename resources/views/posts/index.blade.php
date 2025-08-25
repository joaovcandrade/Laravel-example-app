@extends('layout')

@section('content')
    <h1>Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
        <button><a href="{{ route('posts.create') }}">Criar Novo Post</a></button>
    </ul>
@endsection

