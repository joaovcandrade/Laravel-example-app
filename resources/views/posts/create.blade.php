@extends('layout')

@section('content')
    <h1>Create Posts</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author" required>
        </div>
        <button type="submit">Create Post</button>
    </form>
@endsection

