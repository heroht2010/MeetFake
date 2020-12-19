<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>

    <script src="{{asset('js/calendar.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('calendar/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <script src="{{asset('calendar/main.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@598&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</head>
=======
@extends('calendar.layouts.app')
>>>>>>> 8c957c24670326a7afbc8eebcb8df30a560d5e05

@section('title','Đặt lịch')

@section('content') 
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<<<<<<< HEAD
<body>
@include('sweetalert::alert')
=======
>>>>>>> 8c957c24670326a7afbc8eebcb8df30a560d5e05
  @if (Session::has('email'))
    @php
      $name= session()->get('name');
      $avatar= session()->get('avatar');
      $email = session()->get('email');
      $provider = session()->get('provider');
      $provider_id = session()->get('provider_id');
    @endphp

    <dialog class="dialog" id="dialog-add" style="border-radius:5px;width:50em;border:none;position: absolute;z-index:10000000">
        <div id="dialog-body">
            <form id="dayclick" method="post" action="{{url('eventStore')}}">

            {!! csrf_field() !!}
                <div class="form-group">
                    <label>Title</label><p id="error_title" style="display:none;color:red;">Empty Title</p><input type="text" onchange="vali_title()" class="form-control"  id='title' name='title' placeholder="Title" >
                </div>
                <div class="form-group">
                    <label>Date</label><input type="date" class="form-control" id='date' name='date'>
                </div>
                <div class="form-group">
                    <label>Time</label><input type="time" class="form-control"  id='time' name='time' placeholder="Time" >
                </div>
                <div class="form-group">
                    <label>Link Room</label><input type="text" onchange="vali_title()" class="form-control"  id='link' name='link' placeholder="Link Room" >
                </div>
                <div class="form-group">
                    <label>Text Color</label><input type="color" class="form-control"  id='textColor' name='textColor' placeholder="Text Color" >
                </div>
                <div class="form-group">
                    <label>Background Color</label><input type="color" class="form-control"  id='color' name='color' placeholder="Background Color" value="#ffffff">
                </div>
                <div class="form-group">
                   <input type="hidden" class="form-control"  id='provider_id' name='provider_id' value="{{$provider_id}}" >
                </div>
                <div style="float:right">
                  <input type="submit" class="btn_add" disabled="true" id="btn_add" value="ADD">
                  <input type="button" class="btn_close" id="co" value="Close">
                </div>
            </form>
        </div>
    </dialog>
    <dialog class="dialog" id="dialog_update" style="border-radius:5px;width:50em;border:none;position: absolute;z-index:10000000">
        <div id="dialog-body">
            <form id="dayclick" method="post" action="{{url('eventUpdate')}}">

            {!! csrf_field() !!}
                <div class="form-group">
                    <label>Title</label><p id="error_title_update" style="display:none;color:red;">Empty Title</p> <input type="text" onchange="vali_title_update()" class="form-control"  id='title_update' name='title_update' placeholder="Title" >
                </div>
                <div class="form-group">
                    <label>Date</label> <input type="date" class="form-control" id='date_update' name='date_update'>
                </div>
                <div class="form-group">
                    <label>Time</label><input type="time" class="form-control"  id='time_update' name='time_update' placeholder="Time" >
                </div>
                <div class="form-group">
                    <label>Text Color</label> <input type="color" class="form-control"  id='textColor_update' name='textColor_update' placeholder="Text Color" >
                </div>
                <div class="form-group">
                    <label>Background Color</label> <input type="color" class="form-control"  id='color_update' name='color_update' placeholder="Background Color" value="#ffffff">
                </div>
                <div class="form-group">
                   <input type="hidden" class="form-control"  id='id_update' name='id_update' >
                </div>
                <div style="float:right">
                  <input type="submit" class="btn_add"  id="btn_update" value="UPDATE">

                  <input type="button" class="btn_close" id="co_update" value="CLOSE">
                </div>
            </form>
                <form method="post" action="{{url('eventDelete')}}">
                {!! csrf_field() !!}
                  <input type="hidden" class="form-control"  id='id_delete' name='id_delete' >
                  <input type="submit" class="btn_delete" style="float:right;margin-right: 6px" id="btn_delete" value="DELETE">
                </form>
        </div>
    </dialog>
    <div class="wrapper">
<<<<<<< HEAD
      <main>
      @if ( Session::has('success') )
                <div class="alert alert-success alert-dismissible"  role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
        @endif
        @if ( Session::has('faild') )
            <div class="alert alert-danger alert-dismissible"role="alert">
                <strong>{{ Session::get('faild') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif

      <div id='calendar'></div>
=======
      <main>        
      <div id='calendar'></div> 
>>>>>>> 8c957c24670326a7afbc8eebcb8df30a560d5e05
      </main>
      <sidebar >
        <div class="logo"> <span class="logo">Calendar</span></div>
        <div class="avatar">
          <div class="avatar__img">
            <img class="img_avt" src="{{$avatar}}" alt="avatar">
          </div>
          <div class="avatar__name">{{$name}}</div>
        </div>
        <nav class="menu">

          <a class="menu__item menu__item--active" href="#">
            <i class="menu__icon fa fa-calendar"></i>
            <span class="menu__text">calendar</span>
          </a>
          <a class="menu__item menu__item" href="{{url('logout')}}">
            <i class="menu__icon fa fa-calendar"></i>
            <span class="menu__text">Logout</span>
          </a>
        </nav>

      </sidebar>
    </div>



    <!-- Day click-->
    <script>

    document.addEventListener('DOMContentLoaded', function() {
        function convertdate(str) {
            const d = new Date(str);

            let year = d.getFullYear();
            let month = ''+(d.getMonth() + 1);
            let day = ''+d.getDate();
            if (month.length == 1) {
                month = "0" + month;
            }
            if (day.length == 1) {
                day = "0" + day;
            }
            return year + "-" + month + "-" + day;
        }
        function converttime(str) {
            const d = new Date(str);

            let hour = d.getHours();
            let minute = ''+(d.getMinutes());

            if(hour < 12){
              hour = "0"+hour;
            }
            if(minute.length == 1){
              minute = "0"+minute;
            }
            return hour + ":" + minute;
        }
        var calendarEl = document.getElementById('calendar');
        var dialogadd = document.getElementById('dialog-add');
        var dialogupdate = document.getElementById('dialog_update');
        document.querySelector('#co').onclick = function(){
            dialogadd.close();

        };
        document.querySelector('#co_update').onclick = function(){
            dialogupdate.close();

        };
        var calendar = new FullCalendar.Calendar(calendarEl, {

          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
          },

          showNonCurrentDates: false,

          initialDate: new Date(),
          navLinks: true, // can click day/week names to navigate views
          businessHours: true, // display business hours


          dateClick: function(info) {

            dialogadd.showModal();
            $('#date').val(convertdate(info.dateStr));

            },
            events: "{{url('listEvent',$provider_id)}}",
            eventClick: function(info) {
              dialogupdate.showModal();

              $('#title_update').val(info.event.title);
              $('#id_update').val(info.event.id);
              $('#date_update').val(convertdate(info.event.start));
              $('#time_update').val(converttime(info.event.start));
              $('#textColor_update').val(info.event.textColor);
              $('#color_update').val(info.event.color);

              $('#id_delete').val(info.event.id);
            }
<<<<<<< HEAD

=======
>>>>>>> 8c957c24670326a7afbc8eebcb8df30a560d5e05
        });
        calendar.render();
      });
  </script>

  @else
  <div align='center'>Bạn cần đăng nhập để tiếp tục, Đăng nhập <a href="{{url('/')}}">tại đây</a></div>
    @endif
<script>
    function vali_title()
      {
        var vali_title = document.getElementById("title").value;
        var error_title = document.getElementById("error_title");
        var btn = document.getElementById("btn_add");
        if(vali_title==""){
          error_title.style.display = 'block';
        }
        if(vali_title!=""){
          error_title.style.display = 'none';
          btn.removeAttribute('disabled');
        }
        else{
          error_title.style.display = 'none';
        }
      }
      function vali_title_update()
      {
        var vali_title = document.getElementById("title_update").value;
        var error_title = document.getElementById("error_title_update");
        var btn = document.getElementById("btn_update");
        if(vali_title==""){
          error_title.style.display = 'block';
          btn.setAttribute('disabled',true);
        }
        if(vali_title!=""){
          error_title.style.display = 'none';
          btn.removeAttribute('disabled');
        }
        else{
          error_title.style.display = 'none';
        }
      }
<<<<<<< HEAD


</script>
<script >

=======
>>>>>>> 8c957c24670326a7afbc8eebcb8df30a560d5e05
</script>
@endsection

