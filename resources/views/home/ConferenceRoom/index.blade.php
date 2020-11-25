<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VNGYM - The World Of Gymer</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    {{-- RTC Multiconnection --}}
    <script src="/js/RTCMultiConnection.min.js"></script>
    <script src="https://rtcmulticonnection.herokuapp.com/socket.io/socket.io.js"></script>
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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6"></div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <button class="tablink tabHome" onclick="openPage('Home', this)">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                              </svg>
                              <span id="userCount" style="position: absolute;top: 1;left: 1;">2</span>
                        </button>
<button class="tablink" onclick="openPage('News', this)" >
    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-chat-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
        <path fill-rule="evenodd" d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
      </svg>
</button>
<div class="tablink timeBar" >
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-stopwatch" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07A7.001 7.001 0 0 1 8 16 7 7 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3zm0 2.1a.5.5 0 0 1 .5.5V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 0 1 .5-.5z"/>
      </svg>
      <span id="timeBar"></span>
</div>

<div id="Home" class="tabcontent">
  <h4 style="font-family: 'Roboto',arial,sans-serif;">
    <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" style="margin-right: 2%" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
  </svg>Mọi người</h4>
  <div class="listUser" id="listUser">

  </div>
</div>

<div id="News" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p>
</div>

<script>
function openPage(pageName,elmnt) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.borderBottom = "";
    tablinks[i].style.color = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.borderBottom = "5px solid #3C1A5B";
  elmnt.style.color = "#3C1A5B";
}

</script>

                        <script>
                            var div = document.getElementById('timeBar');
                            function time() {
                            div.innerHTML = "";
                            var d = new Date();
                            var s = d.getSeconds();
                            var m = d.getMinutes();
                            var h = d.getHours();
                            div.innerHTML = h + ":" + m;
                            }
                            setInterval(time, 1000);
                        </script>

                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <div class="listCam">
        <div class="camlocal" id="localvideo"></div>
        <div class="camremote" id="remotevideo"></div>
    </div>

    <input value="{{$idRoom}}" hidden id="idRoom">
    <input value="{{session('iduser')}}" hidden id="idUser">

    <div class="bottomBar">
        <div class="detailRoom">
        <div class="dropup">
            <button onclick="dropUp()" class="dropbtn">Chi tiết về phòng họp
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.204 11L8 5.519 12.796 11H3.204zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                  </svg></button>
            <div id="myDropup" class="dropup-content">
              <div class="dropupContentTitle">
                <p><svg width="1.2em" height="1.2em" style="margin-right: 2%" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                  </svg>Chi tiết</p>
              </div>
              <div class="dropupContentDetail">
                <p style="margin-top: 10px"><b>Thông tin chi tiết về tham gia phòng họp</b></p>
              <p style="margin-bottom: 0px" >{{url()->full()}}</p>
              <input type="text" id="myLink" hidden value="{{url()->full()}}">
              <button class="copyUrlRoom"><b><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-link-45deg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.715 6.542L3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.001 1.001 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 0 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 0 0-4.243-4.243L6.586 4.672z"/>
              </svg>Sao chép thông tin tham gia phòng họp</b></button>
              </div>
              <script>

                </script>
            </div>
          </div>
          <script>
          function dropUp() {
            document.getElementById("myDropup").classList.toggle("show");
          }

          window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
              var dropdowns = document.getElementsByClassName("dropdown-content");
              var i;
              for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                  openDropdown.classList.remove('show');
                }
              }
            }
          }
          </script>
          </div>

          <div class="operationRoom">
              <button id="btnAudio"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-mic" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                <path fill-rule="evenodd" d="M10 8V3a2 2 0 1 0-4 0v5a2 2 0 1 0 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
              </svg></button>
              <button id="btnOff" style="color: tomato"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
              </svg></button>
              <button><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-camera-video" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175l3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
              </svg></button>
          </div>
    </div>

    <div class="modalStatusUser w3-animate-bottom" id="userStatusContainer" >
        <p id="userStatus">fasfaf</p>
    </div>

    <script type="text/javascript">
    class User{
      constructor (id,name,email,avartar) {
        this.id = id
        this.name = name
        this.email = email
        this.avartar = avartar
   }
    }
    var users=[];
    var btnCount=0;
    users.push(new User("<?php echo session('iduser') ?>",
    "<?php echo session('name') ?>",
    "<?php echo session('email') ?>",
    "<?php echo session('avartar') ?>",));
     console.log(users);
        var connection=new RTCMultiConnection();

        connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';
        connection.session={
            audio:true,
            video:true
        };
        connection.sdpConstraints.mandatory={
            OfferToReceiveAudio: true,
            OfferToReceiveVideo: true
        };

        connection.extra = {
        name: "<?php echo session('name');?>",
        email: "<?php echo session('email');?>",
        avartar: "<?php echo session('avartar');?>"
        };

        connection.onstream = function(event) {

        var video = event.mediaElement;
            if(event.type=='local'){
                video.controls=false;
                video.style.width="100%";
                video.style.height="550px";
                $("#localvideo").append(video);

            }

            if(event.type==='remote'){
                video.controls=false;
                video.style.width="50%";
                video.style.height="200px";
                $("#remotevideo").append(video);



            }

            $("#btnAudio").on('click',function(e){
              console.log(e);
              // btnCount+=1;
              // if(btnCount==1){
              //   var firstRemoteStream = connection.streamEvents.selectFirst({
              //     local:true,
              //     userid: '<?php echo session("iduser");?>'
              //     }).stream;
              //   firstRemoteStream.mute('audio');
              // }
              // if(btnCount==2){
              //   var firstRemoteStream = connection.streamEvents.selectFirst({
              //     local:true,
              //     userid: '<?php echo session("iduser");?>'
              //     }).stream;
              //   firstRemoteStream.unmute('audio');
              //   btnCount=0;
              // }
});
        };
        $("#userCount").text(connection.getAllParticipants().length+1);


        connection.userid = $("#idUser").val();
        window.onload = function() {
            connection.openOrJoin($("#idRoom").val() || 'predefiend-roomid');

        };
        connection.onUserStatusChanged=function(event,dontWriteLogs){
            !dontWriteLogs
            &&
            $("#userStatus").text(connection.extra.name+" "+event.status);
            document.getElementById("userStatusContainer").style.visibility = "visible";
            setTimeout(function(){
                document.getElementById("userStatusContainer").style.visibility = "hidden";
             },3000);

             $("#userCount").text(connection.getAllParticipants().length+1);

    connection.getAllParticipants().forEach(function(participantId) {
    var user = connection.peers[participantId];
    var userinRoom="<div class='userInRoom'>";
          userinRoom+="<img src='"+user.extra.avartar+"' id='avartaruserInRoom'>";
          userinRoom+="<p id='nameuserInRoom'>"+user.extra.name+"</p>";
          userinRoom+="</div>";
           $("#listUser").append(userinRoom);

});
        };


    </script>

    <script>
        $("#btnOff").on('click',function(){
            connection.onleave = connection.streamended = connection.onclose = function(event) {
    connection.onUserStatusChanged({
        userid: event.userid,
        extra: event.extra,
        status: 'offline'
    });
};
    $("#userCount").text(connection.getAllParticipants().length+1);
    window.location="/offRoom";
        });
    </script>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/jquery.barfiller.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>



</body>

</html>
