@extends('calendar.layouts.app')

@section('title','Cuộc họp của tôi')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
@endsection
@section('content') 
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        @php
            $name= session()->get('name');
            $avatar= session()->get('avatar');
            $email = session()->get('email');
            $provider = session()->get('provider');
            $provider_id = session()->get('provider_id');
        @endphp
        <body class="body-mymeeting">
            <div class="a">
                a
            </div>
        </body>
    
@endsection

