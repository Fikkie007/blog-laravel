@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">
                {{ $post->title }}
            </h1>

            <a href="/dashboard/posts" class="btn btn-success">
                <span data-feather="arrow-left" class="align-text-bottom"></span>
                Back To All My Posts
            </a>

            <a href="" class="btn btn-warning">
                <span data-feather="edit" class="align-text-bottom"></span>
                Edit
            </a>

            <a href="" class="btn btn-danger">
                <span data-feather="x-circle" class="align-text-bottom"></span>
                Delete
            </a>
<br><br>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
            {!! $post->body !!}
        </article>

        <br><br>
        <a href="/blog" class="display-block mt-3">Back To Post</a>
        
        </div>
    </div>
</div>

@endsection