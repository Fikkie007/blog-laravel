@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $p)

        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x500?{{ $p->name }}" class="card-img" alt="{{ $p->name }}">
                <a class="text-decoration-none text-white" href="/blog?category={{$p->slug}}" >
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $p->name }}</h5>
                
                </div>
            </a>
              </div>
        </div>

        @endforeach 
    </div>
</div>

<br><br>
<a href="/blog">Back To Post</a>

@endsection