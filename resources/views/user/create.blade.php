@extends('layout.main')
@section('content')

<form action="{{route('user.store')}}" method="post" class="form-login form-control p-4">
  @csrf
  <div class="mb-3">
    <label for="" class="form-text fs-5">username</label>
    <input class="form-control" required name="username" placeholder="johndoe">
  </div>
  <div class="mb-3">
    <label for="email" class="form-text fs-5">Email</label>
    <input type="email" required class="form-control" name="email" id="email" placeholder="email@example.com">
  </div>
  <div class="mb-3">
    <label class="form-text fs-5" for="sex">sexo</label>
    <select required name="sex" id="sex" class="form-select">
      <option value="">selecione...</option>
      <option value="M">M</option>
      <option value="F">F</option>
    </select>
  </div>
  <div>
    <label class="form-text fs-5" for="birthday">birthday</label>
    <input type="date" name="birthday" id="" class="input-group form-control mb-3">
  </div>
  <div class="">
    <label class="form-text fs-5" for="password">Password</label>
    <input required type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn-form btn text-white p-2 fs-5 fw-medium input-group mt-3">submit</button>
</form>

@endsection