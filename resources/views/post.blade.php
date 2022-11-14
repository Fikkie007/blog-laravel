@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">
                {{ $post->title }}
            </h1>

            <p>By: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
            {!! $post->body !!}
        </article>

        <br><br>
        <a href="/blog" class="display-block mt-3">Back To Post</a>
        
        </div>
    </div>
</div>

@endsection