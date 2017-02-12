<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
</head>
<body>
<div id="app">
    @include('partial.header')
    <div class="container">
        @yield('content')
    </div>
</div>
<script>
    window.Laravel = {
        csrfToken: "{{csrf_token()}}"
    };
</script>
@yield('footer')
<script src="{{url('js/app.js')}}"></script>
</body>
</html>
