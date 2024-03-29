@extends('layout.main')
@section('content')
<main class="d-flex justify-content-around align-items-center">
  <div></div>
  <form action="{{route('contact.update', $contact->id)}}" method="post" class="form w-50">
    @csrf
    @method('PUT')
    <h4 class="text-center">edit new contact</h4>
    <div>
      <label for="name" class="form-text fs-5 ">name <span class="text-danger">*</span></label>
      <input type="text" name="name" value="{{$contact->name}}" id="name" required class="form-control">
    </div>
    <div>
      <label for="nickname" class="form-text fs-5">nickname</label>
      <input type="text" value="{{$contact->nickname}}" name="nickname" id="nickname" class="form-control">
    </div>
    <div>
      <label for="email" class="form-text fs-5">email</label>
      <input type="text" value="{{$contact->email}}" name="email" id="email" class="form-control">
    </div>
    <div>
      <label for="web_address" class="form-text fs-5">web address</label>
      <input type="text" value="{{$contact->web_address}}" name="web_address" id="web_address" class="form-control">
    </div>
    <div>
      <label class="form-text fs-5" for="birthday">birthday</label>
      <input type="date" name="birthday" id="" value="{{$contact->birthday}}"
        class="fs-5 input-group form-control mb-3">
    </div>
    <div>
      <label for="emergency_contact" name="emergency_contact" max="1" min="0" id="emergency_contact">emergency
        contact</label>
      <input type="checkbox" {{$contact->emergency_contact == 1 ? 'checked' : ''}} value="{{$contact->emergency_contact
      == 1 ? '1' : '0' }}" name="emergency_contact" id="emergency_contact" class="form-check fs-5">
    </div>
    <div class=" d-flex flex-column btn-group">
      <label for="sex" class="form-text fs-5">sex<span class="text-danger">*</span></label>
      <div class="form-check d-flex align-items-center justify-content-start">
        <input type="radio" name="sex" value="M" id="sex" class="form-check-input me-1" {{$contact->sex == 'M' ?
        'checked':''}}>
        <label for="sex" class="form-text fs-5 me-1 form-check-label">M</label>
      </div>
      <div class=" form-check d-flex align-items-center justify-content-start">
        <input type="radio" name="sex" value="F" id="sex" class="form-check-input me-1" {{$contact->sex == 'F' ?
        'checked':''}}>
        <label for="sex" class="form-text fs-5 me-1 form-check-label">F</label>
      </div>
    </div>
    <div class="input-group">
      <div class="">
        <label for="phone" class="form-text fs-5">phone number <span class="text-danger">*</span></label>
        <input type="tel" name="phone" value="{{$contact->phone}}" id="phone" class="form-control" required>
      </div>
      <div>
        <label for="phone_alternative" class="form-text fs-5">phone alternative</label>
        <input type="tel" value="{{$contact->phone_alternative}}" id="phone_alternative" class="form-control">
      </div>
    </div>
    <div>
      <label for="address" class="form-text fs-5">address</label>
      <input name="address" value="{{$contact->address}}" id="address" cols="30" rows="10" class="form-control"></input>
    </div>
    <div>
      <label for="note" class="form-text fs-5">add note</label>
      <textarea name="note" id="note" cols="30" rows="10" class="form-control">{{$contact->note}}</textarea>
    </div>
    <button type="submit" class="mt-3 mb-3  btn btn-dark fw-light fs-5 p-2 rounded-1 align-self-start">edit
      contact</button>
  </form>
</main>
@component('components.footer')
@endcomponent
@endsection