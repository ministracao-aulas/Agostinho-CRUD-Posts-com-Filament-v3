@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <form action="{{ route('posts.store') }}" method="POST">
            <h1>Editar Posts</h1>

            <form method="POST" action="{{ route('posts.update', $posts->id) }}">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $posts->title }}">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{ $posts->slug }}">
                </div>
                <div class="form-group">
                    <label for="content">Conteúdo</label>
                    <textarea name="content" id="content" class="form-control" rows="4">
                {{ $posts->content }}
            </textarea>
                </div>
                <div class="form-group">
                    <label for="published">Publicado</label>
                    <input type="checkbox" name="published" value="1" value="{{$posts->published}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Author</label>
                    <select name="author_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
    </div>
@endsection
