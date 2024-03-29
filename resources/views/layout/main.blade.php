<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    Agendle
    {{$username}}
  </title>
  <link rel="icon" type="image/x-icon" href="{{URL::to('images/shape-28.svg')}}">
  <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::to('app.css')}}">
  <link rel="stylesheet" href="{{URL::to('css/bootstrap-icons.min.css')}}">
</head>

<body>
  @component('components.nav')
  @endcomponent

  @yield('content')

  <script lang="javascript" src="{{URL::to('js/bootstrap.min.js')}}"></script>
</body>

</html>