@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="POST">
              @csrf

                    <div class="form-floating">
                <input type="name" name="name" class="form-control rounded-top @error('name')
                is-invalid
                @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="name" name="username" class="form-control @error('username')
                    is-invalid
                @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')
                    is-invalid
                @enderror" id="email" placeholder="email@example.com" required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password')
                    is-invalid
                @enderror" id="password" placeholder="password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>
            </form>

            <small class="d-block text-center mt-3">Already Tegister ? <a href="/login">Login !</a></small>
          </main>
    </div>
</div>


    
@endsection