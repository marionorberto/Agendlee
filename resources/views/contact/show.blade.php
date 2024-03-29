@extends('layout.main')
@section('content')


<section>
  <div class="d-flex aling-items-top justify-content-around profile-container">
    <div class="p-3 container-img rounded-1">
      <img src="{{URL::to('images/img-profile.jpg')}}" alt="profile-img" class="img-profile">
      <div class="mt-2">
        <label for="" class="d-block fw-light text-start text-white">{{$contact->nickname}}</label>
        <label for="" class="d-block fw-light text-start text-white">{{$contact->name}}</label>
      </div>
    </div>
    <div class="container-input-profile">
      <div class="input-profile mb-2">
        <label for="" class="d-block">E-mail</label>
        <input type="text" disabled value="{{$contact->email}}">
      </div>
      <div class="input-profile mb-2">
        <label for="" class="d-block">Phone number</label>
        <input type="text" disabled value="{{$contact->phone}}">
      </div>
      <div class="input-profile mb-2">
        <label for="" class="d-block">Alternative phone</label>
        <input type="text" disabled value="{{$contact->alternative_phone}}">
      </div>
      <div class="input-profile mb-2">
        <label for="" class="d-block">address</label>
        <input type="text" disabled value="{{$contact->address}}">
      </div>
      <div class="input-profile mb-2">
        <label for="" class="d-block">birtday</label>
        <input type="text" disabled value="{{$contact->birthday}}">
      </div>
      <div class="input-profile mb-2">
        <label for="" class="d-block">sex</label>
        <input type="text" disabled value="{{$contact->sex}}">
      </div>
      <div class="d-flex ">
        <a href="{{route('contact.edit', $contact->id)}}"
          class="btn btn-primary w-100 pt-2 pb-2 fw-medium rounded-1 mt-2">edit</a>

      </div>
    </div>
  </div>
</section>
@component('components.footer')
@endcomponent
@endsection