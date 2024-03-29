@extends('layout.main')
@section('content')

<form action="{{route('user.update', $user->id)}}" method="POST" class="form-login form-control p-4">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="" class="form-text fs-5">username</label>
    <input class="form-control" required name="username" value="{{$user->username}}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-text fs-5">Email</label>
    <input type="email" required class="form-control" name="email" id="email" value="{{$user->email}}">
  </div>
  <div class="mb-3">
    <label class="form-text fs-5" for="sex">sexo</label>
    <select required name="sex" id="sex" class="form-select" va>
      <option value="{{$user->sex}}">{{$user->sex}}</option>
      <option value="M">M</option>
      <option value="F">F</option>
    </select>
  </div>
  <div>
    <label class="form-text fs-5" for="birthday">birthday</label>
    <input type="date" name="birthday" id="" class="input-group form-control mb-3" value="{{$user->birthday}}">
  </div>
  <button type="submit" class="btn-form btn btn-dark input-group mt-3 btn-md">Editar</button>
</form>

@endsection