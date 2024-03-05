@extends('layout.main')
@section('content')

<a href="http://localhost:8000/user/create" class="btn btn-dark ms-5">create user</a>
@if(isset($users))

<table class="table table-hover table-light border">
  <thead>
    <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Email</th>
      <th>Birthday</th>
      <th>Sex</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user['id']}}</td>
      <td>{{$user['username']}}</td>
      <td>{{$user['email']}}</td>
      <td>{{$user['birthday']}}</td>
      <td>{{$user['sex']}}</td>
      <td class="d-inline-flex gap-3">
        <a href="{{route('user.edit', $user['id'])}}" class="btn btn-primary btn-sm">Edit</a>
        <a href="{{route('user.show', $user['id'])}}" class="btn btn-success btn-sm">Show</a>
          <form  action="{{route('user.destroy', $user['id'])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"class="btn btn-danger btn-sm">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@else
<h1>no data</h1>
@endif

@endsection
