@extends('layouts.master')

@section('content')
<a href="/article" class="btn btn-warning btn-sm m-sm-3 ">
    <span class="text">Back</span>
</a>
<!-- Page Heading -->


<div class="card">
    <div class="card-body">
    <p> Judul :  {{ $article->title }}</p>
    <p> Slug :  {{ $article->slug }}</p>
    <p>   {{ $article->content }}</p>
    @foreach ($tags as $tag)
            <button class="btn btn-info btn-sm">{{ $tag }}</button>
        @endforeach
 
    </div>
</div>
@endsection
