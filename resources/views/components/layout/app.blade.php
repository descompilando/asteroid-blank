<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @if ($title ?? false) {{ $title }} | @endif
        {{ config('app.name') }}
    </title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <livewire:styles />

    @stack('styles')
</head>

<body class="min-h-screen antialiased">
    {{ $slot }}

    <livewire:scripts />
    <script src="{{ mix('js/app.js') }}"></script>

    @stack('scripts')
</body>

</html>
