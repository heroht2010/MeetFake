
var pageInitialized = false;
$(document).ready(function(){
  // Khởi tạo một đối tượng Pusher với app_key
  var pusher = new Pusher('db044889be99b3a4edca', {
                            cluster: 'ap1',
                            encrypted: true,
  });
  //Đăng ký với kênh chanel-demo-real-time mà ta đã tạo trong file DemoPusherEvent.php
  var channel = pusher.subscribe('VKUMeet-chat');
  //Bind một function addMesagePusher với sự kiện DemoPusherEvent
  channel.bind('App\\Events\\ChatEvent', addMessageDemo);
  console.log("test");
  if(pageInitialized) return;
    pageInitialized = true;
});
  //function add message
function addMessageDemo(data) {

  var idRoom_chat = document.getElementById("idRoom-chat").value;

  if(idRoom_chat==data.idRoom){
    var liTag = $("<div class='chat-content'></div>");
    liTag.html(data.message);
    $('#chat-box').append(liTag);
  }
}
function formChat()
{
  var sms = document.getElementById("sms-send").value;
  var idRoom = document.getElementById("idRoom-chat").value;
  var Username = document.getElementById("Username").value;
  if(sms!=''){
    $.ajax({
    type : 'GET', //Sử dụng kiểu gửi dữ liệu POST
    url : 'fire-event', //gửi dữ liệu sang trang data.php
    data:{
          sms:sms,
          idRoom:idRoom,
          Username:Username
        },
    success:function(data){
      console.log(data);
    }
    });
  }
  document.getElementById("sms-send").value="";
}   
