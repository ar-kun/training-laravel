@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-7">
    <main class="form-register w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password">
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
      </form>
      <small class="d-block mt-3 text-center">You have account ? <a href="/login">Login</a></small>
    </main>
  </div>
</div>
@endsection