<!doctype html>
<html lang="{{ str_replace('_', '-', 'pt-br' )}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="all">
    
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" media="all" defer>
    <link type="text/css" rel="stylesheet" href="{{asset('css/theme.css')}}" media="screen" />
  </head>
<body>
    <noscript>
        <div class="alert alert-warning">
            <span class="text-center">
                Habilite o javascript
            </span>
        </div>
    </noscript>
        @if (session()->exists('user'))
        @include('cpanel.navbar')
            <div class="container-fluid">
                <div class="row section-content-height">
                    <div class="col-md-1">
                        @include('cpanel.sidebar')
                    </div>
                    <div class="col-md-9 offset-md-2 offset-lg-1 justify-content-center" >
                        <div class="container-fluid content">
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
        
    <script type="text/javascript">
        window.onLoad = () => {
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
        };
    </script>
</body>
</html>
