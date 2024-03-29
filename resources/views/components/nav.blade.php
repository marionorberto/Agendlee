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
    <li><a class="text-decoration-none nav-a {{request()->routeIs('login') ? 'ative' : ''}}"
        href="http://localhost:8000/login">Login</a></li>
    <li><a class="text-decoration-none btn-register-home" href="http://localhost:8000/register">Register</a></li>
    <li>
      @yield('username')
    </li>
  </ul>
</nav>