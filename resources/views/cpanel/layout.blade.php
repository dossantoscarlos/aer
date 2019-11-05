<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title','Layout')</title>
    <!-- Fonts -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <script type="text/javascript" src="{{ asset('js/treeview.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet"> <!--load all styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/dashboard.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/theme.css')}}"/>
</head>
<body style="background-color:#FFFF">
        @if (session()->exists('user'))
            @include('CPanel.navbar')
            <div class="container-fluid">
                <div class="row" style="height: 94vh">
                    <div class="col-md-1">
                        @include('CPanel.sidebar')
                    </div>
                    <div class="col-md-9 offset-md-1 justify-content-center" >
                        <div class="container-fluid" style="margin-left:-2%;margin-top:2%;margin-bottom:3%" >
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
		@else
            <div class='container-fluid'>
                @yield('content')
            </div>
		@endif
</body>
<script>
    window.onload = function () {
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    };
</script>
</html>
