@extends('calendar.layouts.app')

@section('title','Cuộc họp của tôi')

@section('content') 
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    @if (Session::has('email'))
        @php
            $name= session()->get('name');
            $avatar= session()->get('avatar');
            $email = session()->get('email');
            $provider = session()->get('provider');
            $provider_id = session()->get('provider_id');
        @endphp

    @else
        <div align='center'>Bạn cần đăng nhập để tiếp tục, Đăng nhập <a href="{{url('/')}}">tại đây</a></div>
    @endif
@endsection

