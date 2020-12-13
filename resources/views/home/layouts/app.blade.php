<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    {{-- JS FILE --}}
    <script src="{{asset('/js/tablink.js')}}"></script>
    <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('/js/jquery.barfiller.js')}}"></script>
    <script src="{{asset('/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>

    <style>
        body{
            background-color: #19191a;
        }
        video{
            -moz-transform: scale(-1, 1);
    -webkit-transform: scale(-1, 1);
    -o-transform: scale(-1, 1);
    -ms-transform: scale(-1, 1);
    transform: scale(-1, 1);
        }
        </style>
</head>

<body>
@yield('content')
</body>
</html>
