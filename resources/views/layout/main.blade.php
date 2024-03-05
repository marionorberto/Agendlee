<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>contact app</title>
        <link rel="stylesheet" href={{URL::to('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{URL::to('app.css') }}>
    </head>
    <body>
        @component('components.nav')

        @endcomponent
        @yield('content')
        <script lang="javascript" src="href={{URL::to('js/bootstrap.min.js')}}" ></script>
    </body>
</html>
