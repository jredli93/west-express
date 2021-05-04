<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'West Express') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.svg') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/font-vintage1/flaticon.css') }}" rel="stylesheet"> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>

</head>
<body>

    @yield('header')
    @yield('content')
    @yield('footer')

    <div class="overlay overlay-slidedown">
        <i class="fas fa-times close-button"></i>
        <nav>
            <ul>
                <li><a href="{{ URL::route('home') }}">Home</a></li>
                <li><a href="{{ URL::route('about-us') }}">About</a></li>
                <li><a href="{{ URL::route('services') }}">Services</a></li>
                <li><a href="{{ URL::route('careers') }}">Careers</a></li>
                <li><a href="{{ URL::route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/5abe40685b.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/mobile-menu.js') }}" defer></script>
    <script src="{{ asset('js/accordion.js') }}" defer></script>
    
</body>
</html>
