<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    Agendle
  </title>
  <link rel="icon" type="image/x-icon" href="{{URL::to('images/shape-28.svg')}}">
  <link rel="stylesheet" href={{URL::to('css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{URL::to('app.css')}}>
  <link rel="stylesheet" href={{URL::to('css/bootstrap-icons.min.css')}}>
</head>

<body>
  @component('components.minimal-nav')
  @endcomponent

  @yield('content')

  <script lang="javascript" src="href={{URL::to('js/bootstrap.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>
