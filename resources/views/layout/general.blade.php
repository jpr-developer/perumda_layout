<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Leadership Dashboard - @yield('title')</title>
    <!-- CSS files -->
    <link href="{{asset('assets/dist/css/tabler.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/dist/css/custome.css')}}">

    <link rel="icon" href="{{asset('assets/logo/logo.png')}}">

    @yield('css')

  </head>
  <body >
    <div class="page">
        @include('layout.sidebar')
        @include('layout.header')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="page-body">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('layout.footer')
        </div>
    </div>

    <!-- Tabler Core -->
    <script src="{{asset('assets/dist/js/tabler.min.js')}}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="{{asset('assets/dist/js/custome.js')}}"></script>

    @yield('js')
  </body>
</html>
