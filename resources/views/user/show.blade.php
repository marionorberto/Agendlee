@extends('layout.main')
@section('content')

@if(isset($user))

<div class="card-user card border">
  <div class="card-header">
    <h2 class="card-title">user</h2>
  </div>
  <div class="card-body">
    <h3>id: {{$user->id}}</h3>
    <h3>username: {{$user->username}}</h3>
    <h3>email: {{$user->email}}</h3>
    <h3>birthday: {{$user->birthday}}</h3>
    <h3>sex: {{$user->sex}}</h3>
  </div>
  <div class="card-footer">
    <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary btn-sm">Edit</a>
    <a href="{{route('user.index')}}" class="btn btn-success btn-sm">Back</a>
  </div>
</div>

@else
<h1>no data</h1>
@endif

@endsection