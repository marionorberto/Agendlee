@extends('layout.no-layout')
@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center pt-5">
  <a class="text-decoration-none  fs-2 fw-bolder text-dark mb-0" href="/">
    <img src="{{URL::to('images/shape-28.svg')}}" alt="" srcset=""> Agendle
  </a>

  <form action="http://localhost:8000/forgot-password" method="post" class="form-login form-control p-4">
    @csrf
    <h3 class="text-center">Enter your E-mail</h3>
    <div class="mb-3">
      <label for="email" class="form-text fs-6">E-mail</label>
      <input type="email" required class="form-control fs-6" name="email" id="email">
    </div>


    <button type="submit" class="btn-form btn text-white p-2 fs-5 fw-medium input-group mt-3">Send</button>
    <div class="d-flex align-items-center justify-content-center gap-2">
      <hr class="w-50">
      <span class="text-secondary fs-6 fw-lighter">or</span>
      <hr class="w-50">
    </div>
    <div class="text-center">
      <a href="http://localhost:8000/login" class="text-center text-decoration-none link-forget-password fs-4">
        Sign In
      </a>
    </div>
  </form>
</div>
@endsection