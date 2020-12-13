<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/welcome.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <title>Welcome Calendar</title> 
</head>
<body>
@include('sweetalert::alert')
    <div class="container">

        <span>Calendar</span>
        <div class="row justify-content-center form-login">
            <div class="col-lg-4 ">
                <a href="{{ url('/login/google') }}"><button class="btn-google"><img src="https://i.pinimg.com/originals/74/65/f3/7465f30319191e2729668875e7a557f2.png" class="img-logo" alt=""> Sign in with Google</button></a>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-4 ">
                <a href="{{ url('') }}"><button class="btn-meetroom">Meet Room</button></a>
            </div>
        </div>
    </div>
    
    
</body>
</html>