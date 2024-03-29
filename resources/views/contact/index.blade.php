@extends('layout.main')
@section('content')

@if(@count($contacts)<= 0) <div class="alert alert-warning opacity-75 text-center me-auto ms-auto">create new contacts
  so manage your schedule
  properly.
  </div>
  @endif
  <h3 class="text-center mt-5 fw-light fs-1">Contacts on your schedule</h3>

  <table class="table table-hover table-responsive">
    <thead>
      <tr class="bg-white">
        <th>
          <a href="{{route('contact.create')}}" class="btn btn-dark fw-light fs-6 rounded-1">create
            contact
          </a>
        </th>
        <th>
        </th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th class="ps-4">cod</th>
        <th>name</th>
        <th>nickname</th>
        <th>email</th>
        <th>birthday</th>
        <th>phone number</th>
        <th>address</th>
        <th>actions</th>
      </tr>
    </thead>
    <tbody>
      @if(@count($contacts)<= 0) <tr>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        </tr>
        @else
        @foreach ($contacts as $contact)
        <tr>
          <td class="ps-4">
            {{
            $contact['id']
            }}
          </td>
          <td>
            {{
            $contact['name'] ? $contact['name'] : '--'
            }}
          </td>
          <td>
            {{
            $contact['nickname'] ? $contact['nickname'] : '--'
            }}
          </td>
          <td>
            {{
            $contact['email'] ? $contact['email'] : '--'
            }}
          </td>
          <td>
            {{
            $contact['birthday'] ? $contact['birthday'] : '--'
            }}
          </td>
          <td>
            {{ $contact['phone'] ? $contact['phone'] : '--'}}
          </td>
          <td>
            {{ $contact['address'] ? $contact['address'] : '--'}}
          </td>
          <td class="d-flex gap-2">
            <a href="{{route('contact.show', $contact['id'])}}" class="btn btn-primary btn-sm fw-medium">view</a>
            <form action="{{route('contact.destroy', $contact['id'])}}" method="post">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm fw-medium">delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        @endif
    </tbody>
  </table>
  <hr class="w-50 d-flex me-auto ms-auto">
  <h5 class="text-center fw-lighter fs-6 mb-5 pb-5 ">{{@count($contacts)}} contacts in your schedule</h5>

  @component('components.footer')
  @endcomponent
  @endsection