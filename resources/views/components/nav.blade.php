<nav class="d-flex justify-content-around align-content-center p-4 ">
  <a class="text-decoration-none  fs-2 fw-bolder text-dark" href="/">
    <img src="{{URL::to('images/shape-28.svg')}}" alt="" srcset=""> Agendle
  </a>
  <ul class="list-unstyled d-flex  gap-4">
    <li><a class="text-decoration-none nav-a {{request()->routeIs('home') ? 'ative' : ''}}" href="/">Home</a></li>
    <li><a class="text-decoration-none nav-a {{request()->routeIs('contact.*') ? 'ative' : ''}}"
        href="{{route('contact.index')}}">Contacts</a></li>
    <li><a class="text-decoration-none nav-a {{request()->routeIs('about') ? 'ative' : ''}}"
        href="http://localhost:8000/about">About</a></li>

    @if (!Session::has('loginSession'))
    <li><a class="text-decoration-none nav-a {{request()->routeIs('login') ? 'ative' : ''}}"
        href="http://localhost:8000/login">Login</a></li>
    <li><a class="text-decoration-none btn-register-home" href="http://localhost:8000/register">Register</a></li>
    @endif

    @if (Session::has('loginSession'))
    <div class="dropdown m-0">
      <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{URL::to('images/img-profile.jpg')}}" alt="profile-page-img" class="img-profile-page">
      </button>
      <ul class="dropdown-menu">
        <li class="dropdown-item">
          {{
          @Session::get('loginSession')['username']
          }}
        </li>
        <li class="dropdown-item">
          {{
          @Session::get('loginSession')['email']
          }}
        </li>
        <hr class="dropdown-divider">
        <li><a class="dropdown-item fw-bold" href="http://localhost:8000/logout">Logout</a></li>
      </ul>
    </div>
    @endif

  </ul>
</nav>
