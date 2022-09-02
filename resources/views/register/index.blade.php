@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-7">
    <main class="form-register w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
      <form>
        <div class="form-floating">
          <input type="text" name="name" class="form-control" id="name" placeholder="Name">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="Username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
      </form>
      <small class="d-block mt-3 text-center">You have account ? <a href="/login">Login</a></small>
    </main>
  </div>
</div>
@endsection