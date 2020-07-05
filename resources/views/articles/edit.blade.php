@extends('layouts.master')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Update an Article</h1>

<div class="card card-success">
    <form action="/article/{{ $article->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" rows="5" style="resize: none;">{{ $article->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="created_by">Your Name</label>
                <input type="text" name="created_by" id="created_by" class="form-control" value="{{ $article->created_by }}">
            </div>
            <div class="form-group">
                <label for="tags">Tag</label>
                <input type="text" name="tags" id="tags" class="form-control" value="{{ $article->tags }}">
            </div>
        </div>
        <div class="card-footer">
            <a href="/article" class="btn btn-warning"> Back</a>
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection
