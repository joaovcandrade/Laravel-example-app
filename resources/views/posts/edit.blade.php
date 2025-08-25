@extends('layout')

@section('content')
    <h1>Edit Posts</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="PUT">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content" required>{{ $post->content }}</textarea>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ $post->author }}" required>
        </div>
        <button type="submit">Update Post</button>
    </form>
@endsection

