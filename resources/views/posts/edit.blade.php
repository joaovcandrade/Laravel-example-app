@extends('layout')

@section('content')
    <h1>Editar Post</h1>

    @if ($errors->any())
        <div style="color:#b00; margin-bottom:1rem;">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $post->title) }}"
                required
            >
        </div>

        <div>
            <label for="content">Content</label>
            <textarea
                id="content"
                name="content"
                required
            >{{ old('content', $post->content) }}</textarea>
        </div>

        <div>
            <label for="author">Author</label>
            <input
                type="text"
                id="author"
                name="author"
                value="{{ old('author', $post->author) }}"
                required
            >
        </div>

        <button type="submit">Salvar alterações</button>
        <a href="{{ route('posts.show', $post) }}">Cancelar</a>
    </form>
@endsection
