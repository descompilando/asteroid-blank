<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            {{ config('app.name') }} @if ($title ?? false) | {{ $title }} @endif
        </title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <livewire:styles />
    </head>
    <body class="min-h-screen antialiased">
        {{ $slot }}

        <livewire:scripts />
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
