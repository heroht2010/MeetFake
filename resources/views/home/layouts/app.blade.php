<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="VKU meet for student's university">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="../image/LOGO.png" />
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    {{-- RTC Multiconnection --}}
    <script src="{{asset('/js/RTCMultiConnection.min.js')}}"></script>
    <script src="https://rtcmulticonnection.herokuapp.com/socket.io/socket.io.js"></script>
    {{-- JS FILE --}}
    <script src="{{asset('/js/tablink.js')}}"></script>
    <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('/js/jquery.barfiller.js')}}"></script>
    <script src="{{asset('/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/copyToClipBoard.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/chat.js')}}"></script>


    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
