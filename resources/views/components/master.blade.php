<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{env('APP_NAME')}}</title>
    <link rel="icon" href="{{ url('image/Logo2.png') }}">
</head>
<body>
   {{-- Navbar --}}
@include('components.navbar')
   {{-- End Navbar --}}
@yield('content')
   {{-- Footer --}}
   @include('components.footer')
   {{-- End Footer --}}
</body>
</html>
