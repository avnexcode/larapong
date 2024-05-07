<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Daisy CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.5/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title }} {{ env('APP_NAME')}}</title>
</head>

<body>
    @include('ujian.components.navbar')
    <div>
        @yield('container')
    </div>
</body>

</html>
