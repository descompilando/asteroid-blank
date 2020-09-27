<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>

    <livewire:styles />

    <title>
        @yield('title'){{env('APP_NAME')}}
    </title>

    @yield('head')
</head>
<body class="h-screen flex flex-col @yield('bg-image', 'bg-white') justify-between bg-fixed">
    @yield('content')

    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('scripts')
    <livewire:scripts />
</body>
</html>