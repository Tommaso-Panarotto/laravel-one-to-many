@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="mt-5">Modifica progetto {{ $project->title }}</h1>

        <form class="mt-5" method="POST" action="{{ route('admin.projects.update', $project->id) }}">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">titolo prgetto:</label>
                <input type="text" class="form-control" id="project-title" name="title"
                    value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="alert alert-warning">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">nome autore:</label>
                <input type="text" class="form-control" id="project-author" name="author"
                    value="{{ old('author', $project->author) }}">
                @error('author')
                    <div class="alert alert-warning">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">linguaggio usato:</label>
                <input type="text" class="form-control" id="project-language" name="language"
                    value="{{ old('language', $project->language) }}">
                @error('language')
                    <div class="alert alert-warning">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">link progetto:</label>
                <input type="text" class="form-control" id="project-url" name="url"
                    value="{{ old('url', $project->url) }}">
                @error('url')
                    <div class="alert alert-warning">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">descrizione progetto:</label>
                <textarea class="form-control" id="project-description" rows="3" name="description">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="alert alert-warning">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="buttons">
                <button type="submit" class="btn btn-success">Invia</button>
                <button type="reset" class="btn btn-warning">Reset campi</button>
            </div>
        </form>
    </div>
@endsection
