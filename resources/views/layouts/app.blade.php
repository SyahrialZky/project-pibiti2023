<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} - @yield('title')</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('js/flowbite.js') }}" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link rel="icon" href="{{ url('image/Logo2.png') }}">
</head>

<body>
    @include('components.navbar')
    <div class="px-2 md:px-20 mx-auto max-w-screen-2xl">
        <div class="p-5 border-gray-200 rounded-lg dark:border-gray-700">
            @include("components.timeline")
            @yield('content', 'content')
        </div>
    </div>
</body>

</html>
