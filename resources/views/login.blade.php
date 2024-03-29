@extends('layout.no-layout')
@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center pt-5">
  <a class="text-decoration-none  fs-2 fw-bolder text-dark mb-0" href="/">
    <img src="{{URL::to('images/shape-28.svg')}}" alt="" srcset=""> Agendle
  </a>

  <form action="http://localhost:8000/login" method="post" class="form-login form-control p-4">
    @csrf
    <h3 class="text-center">Log in</h3>
    <div class="mb-3">
      <label for="email" class="form-text fs-6">E-mail</label>
      <input type="email" required class="form-control fs-6" name="email" id="email">
      <span class="text-danger fs-6">
        @if(isset($emailError))
        {{
        $emailError
        }}
        @endif
      </span>
    </div>

    <div class="">
      <label class=" form-text fs-6" for="password">Password</label>
      <input required type="password" class="form-control fs-6" name="password" id="password">
      <span class="text-danger fs-6">
        @if(isset($passwordError))
        {{
        $passwordError
        }}
        @endif
      </span>
    </div>

    <button type="submit" class="btn-form btn text-white p-2 fs-5 fw-medium input-group mt-3">Entrar</button>
    <div class="d-flex align-items-center justify-content-center gap-2">
      <hr class="w-50">
      <span class="text-secondary fs-6 fw-lighter">or</span>
      <hr class="w-50">
    </div>
    <button type="submit" class="btn btn-outline-secondary text-secondary p-1 fs-6 fw-medium input-group mt-2">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
        height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
        class="">
        <g>
          <path
            d="m492.668 211.489-208.84-.01c-9.222 0-16.697 7.474-16.697 16.696v66.715c0 9.22 7.475 16.696 16.696 16.696h117.606c-12.878 33.421-36.914 61.41-67.58 79.194L384 477.589c80.442-46.523 128-128.152 128-219.53 0-13.011-.959-22.312-2.877-32.785-1.458-7.957-8.366-13.785-16.455-13.785z"
            style="" fill="#167ee6" data-original="#167ee6" class=""></path>
          <path
            d="M256 411.826c-57.554 0-107.798-31.446-134.783-77.979l-86.806 50.034C78.586 460.443 161.34 512 256 512c46.437 0 90.254-12.503 128-34.292v-.119l-50.147-86.81c-22.938 13.304-49.482 21.047-77.853 21.047z"
            style="" fill="#12b347" data-original="#12b347" class=""></path>
          <path
            d="M384 477.708v-.119l-50.147-86.81c-22.938 13.303-49.48 21.047-77.853 21.047V512c46.437 0 90.256-12.503 128-34.292z"
            style="" fill="#0f993e" data-original="#0f993e"></path>
          <path
            d="M100.174 256c0-28.369 7.742-54.91 21.043-77.847l-86.806-50.034C12.502 165.746 0 209.444 0 256s12.502 90.254 34.411 127.881l86.806-50.034c-13.301-22.937-21.043-49.478-21.043-77.847z"
            style="" fill="#ffd500" data-original="#ffd500" class=""></path>
          <path
            d="M256 100.174c37.531 0 72.005 13.336 98.932 35.519 6.643 5.472 16.298 5.077 22.383-1.008l47.27-47.27c6.904-6.904 6.412-18.205-.963-24.603C378.507 23.673 319.807 0 256 0 161.34 0 78.586 51.557 34.411 128.119l86.806 50.034c26.985-46.533 77.229-77.979 134.783-77.979z"
            style="" fill="#ff4b26" data-original="#ff4b26"></path>
          <path
            d="M354.932 135.693c6.643 5.472 16.299 5.077 22.383-1.008l47.27-47.27c6.903-6.904 6.411-18.205-.963-24.603C378.507 23.672 319.807 0 256 0v100.174c37.53 0 72.005 13.336 98.932 35.519z"
            style="" fill="#d93f21" data-original="#d93f21" class=""></path>
        </g>
      </svg> Login with Google</button>
    <div>
      <a href="{{route('password-recovering')}}"
        class="fs-5 text-end link-forget-password d-block m-2 text-decoration-none fs-6">Forgot Password?</a>
      <span class="fs-6 d-flex justify-content-center mt-3 gap-2">Not a member? <a href="http://localhost:8000/register"
          class="text-decoration-none link-forget-password"> Register</a></span>
    </div>
  </form>
</div>
@endsection