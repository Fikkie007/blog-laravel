@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/blog">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search ..." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>

    </form>
  </div>
</div>


@if ($posts->count())
    
<div class="card mb-3">

    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">

    <div class="card-body text-center">

      <h3 class="card-title">
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
    </h3>

      <p>
        <small class="text-muted">
            By: <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="posts/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}
        </small>
        </p>

      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>

    </div>
  </div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $posts)

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">
                    <a href="posts/categories/{{ $posts->category->slug }}" class="text-white text-decoration-none">
                    {{ $posts->category->name }}
                </a>
                </div>
                <img src="https://source.unsplash.com/500x400?{{ $posts->category->name }}" class="card-img-top" alt="{{ $posts->category->name }}">
                <div class="card-body">
                  <h5 class="card-title"> {{ $posts->title }}</h5>
                  <small class="text-muted">
                    By: <a href="/authors/{{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a>
                    {{ $posts->created_at->diffForHumans() }}
                </small>
                  <p class="card-text">{{ $posts->excerpt }}</p>
                  <a href="/posts/{{ $posts->slug }}" class="btn btn-primary">ReadMore</a>
                </div>
              </div>
        </div>

        @endforeach
    </div>
</div>

@else

<p class="tex-center fs-4" >No Post Found</p>
    
@endif

@endsection