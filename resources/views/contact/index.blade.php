@extends('layout.main')
@section('content')

<a href="http://localhost:8000/contact/create" class="btn btn-dark ms-5">create contact</a>
@if(isset($contacts))

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
    @foreach($contacts as $contact)
    <tr>
      <td>{{$contact['id']}}</td>
      <td>{{$contact['username']}}</td>
      <td>{{$contact['email']}}</td>
      <td>{{$contact['birthday']}}</td>
      <td>{{$contact['sex']}}</td>
      <td class="d-inline-flex gap-3">
        <a href="{{route('contact.edit', $contact['id'])}}" class="btn btn-primary btn-sm">Edit</a>
        <a href="{{route('contact.show', $contact['id'])}}" class="btn btn-success btn-sm">Show</a>
          <form  action="{{route('contact.destroy', $contact['id'])}}" method="post">
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
