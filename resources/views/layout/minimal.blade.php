<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>schedule App</title>
        <link rel="stylesheet" href={{URL::to('css/bootstrap.min.css')}}>
        <link rel="stylesheet" href={{URL::to('app.css')}}>
        <link rel="stylesheet" href={{URL::to('css/bootstrap-icons.min.css')}}>
    </head>
    <body>
        @component('components.minimal-nav')
        @endcomponent

        @yield('content')

        <script lang="javascript" src="href={{URL::to('js/bootstrap.min.js')}}" ></script>
    </body>
</html>
