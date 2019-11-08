<!doctype html>
<html lang="{{ str_replace('_', '-', 'pt-br' )}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    
    <link href="{{ asset('css/all.css') }}" rel="stylesheet"> <!--load all styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/dashboard.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/theme.css')}}"/>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body style="background-color:#FFFF">
    
        @if (session()->exists('user'))
        @include('cpanel.navbar')
            <div class="container-fluid">
                <div class="row" style="height: 94vh">
                    <div class="col-md-1">
                        @include('cpanel.sidebar')
                    </div>
                    <div class="col-md-9 offset-md-1 justify-content-center" >
                        <div class="container-fluid" style="margin-left:-2%;margin-top:2%;margin-bottom:3%" >
                            @yield("content")
                         </div>
                    </div>
                </div>
            </div>
		@else
            <div class='container-fluid'>
                @yield('content')
            </div>
		@endif
        <script>
                window.onload = function () {
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                };
        </script>
</body>
</html>
