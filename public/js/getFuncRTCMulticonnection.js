

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
        var displayMediaOptions = {
            video: {
              cursor: "always"
            },
            audio: false
          };
        connection.iceServers = [];

        connection.iceServers.push({
            urls: 'stun:ss-turn2.xirsys.com',
            credential: '0ad512c0-5b8c-11eb-b7e2-0242ac140004',
            username: 'hsB04HffhbpA6XDHKOagEYBVFvqFBcg1L6yYo37xu7_rU49DAk4bVYaiG4h-29YtAAAAAGAI35RoZXJvaHQyMDEw'
        });

        connection.maxParticipantsAllowed=12;

        connection.userid = $("#idUser").val();
        connection.sessionid = cutName($("#idRoom").val());
        console.log(cutAvatar(connection.sessionid));
        connection.onstream = function(event) {

        var video = event.mediaElement;
            if(event.type=='local'){
                video.controls=false;
                video.style.width="100%";
                video.style.height="580px";
                $("#localvideo").append(video);
            }

            if(event.type==='remote'){
                video.controls=false;
                video.style.width="50%";
                video.style.height="200px";
                $("#remotevideo").append(video);


            }


            var btnCountAudio=0;
            $("#btnAudio").on('click',function(e){
              btnCountAudio++;
              if(btnCountAudio==1){
                var firstRemoteStream = connection.streamEvents.selectFirst({
                  local:true,
                  }).stream;
                firstRemoteStream.mute('audio');
                $("#btnAudio").css("background-color","tomato");
                var iconBtn="<svg width='1.4em' height='1.4em' id='iconAudio' style='color:white' viewBox='0 0 16 16' class='bi bi-mic-mute' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>";
                    iconBtn+="<path fill-rule='evenodd' d='M12.734 9.613A4.995 4.995 0 0 0 13 8V7a.5.5 0 0 0-1 0v1c0 .274-.027.54-.08.799l.814.814zm-2.522 1.72A4 4 0 0 1 4 8V7a.5.5 0 0 0-1 0v1a5 5 0 0 0 4.5 4.975V15h-3a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-3v-2.025a4.973 4.973 0 0 0 2.43-.923l-.718-.719zM11 7.88V3a3 3 0 0 0-5.842-.963l.845.845A2 2 0 0 1 10 3v3.879l1 1zM8.738 9.86l.748.748A3 3 0 0 1 5 8V6.121l1 1V8a2 2 0 0 0 2.738 1.86zm4.908 3.494l-12-12 .708-.708 12 12-.708.707z'/>";
                    iconBtn+="</svg>";
                    $("#iconAudio").replaceWith(iconBtn);
              }
              if(btnCountAudio==2){
                var firstRemoteStream = connection.streamEvents.selectFirst({
                  local:true,
                  }).stream;
                firstRemoteStream.unmute('audio');
                btnCountAudio=0;
                $("#btnAudio").css("background-color","white");
                var iconBtn="<svg width='1.4em' height='1.4em' id='iconAudio' viewBox='0 0 16 16' class='bi bi-mic' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>";
                    iconBtn+="<path fill-rule='evenodd' d='M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z'/>";
                    iconBtn+="<path fill-rule='evenodd' d='M10 8V3a2 2 0 1 0-4 0v5a2 2 0 1 0 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z'/>";
                    iconBtn+="</svg>";
                    $("#iconAudio").replaceWith(iconBtn);
              }
});

var btnCountVideo=0;
            $("#btnVideo").on('click',function(e){
              btnCountVideo++;
              console.log(btnCountVideo);
              if(btnCountVideo==1){
                var firstRemoteStream = connection.streamEvents.selectFirst({
                  local:true,
                  }).stream;
                firstRemoteStream.mute('video');
                $("#btnVideo").css("background-color","tomato");
                var iconBtn="<svg width='1.4em' height='1.4em' id='iconVideo' viewBox='0 0 16 16' class='bi bi-camera-video-off' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>";
                    iconBtn+="<path fill-rule='evenodd' d='M10.961 12.365a1.99 1.99 0 0 0 .522-1.103l3.11 1.382A1 1 0 0 0 16 11.731V4.269a1 1 0 0 0-1.406-.913l-3.111 1.382A2 2 0 0 0 9.5 3H4.272l.714 1H9.5a1 1 0 0 1 1 1v6a1 1 0 0 1-.144.518l.605.847zM1.428 4.18A.999.999 0 0 0 1 5v6a1 1 0 0 0 1 1h5.014l.714 1H2a2 2 0 0 1-2-2V5c0-.675.334-1.272.847-1.634l.58.814zM15 11.73l-3.5-1.555v-4.35L15 4.269v7.462zm-4.407 3.56l-10-14 .814-.58 10 14-.814.58z'/>";
                    iconBtn+="</svg>";
                    $("#iconVideo").replaceWith(iconBtn);
              }
              if(btnCountVideo==2){
                var firstRemoteStream = connection.streamEvents.selectFirst({
                  local:true,
                  }).stream;
                firstRemoteStream.unmute('video');
                btnCountVideo=0;
                $("#btnVideo").css("background-color","white");
                var iconBtn="<svg width='1.4em' height='1.4em' id='iconVideo' viewBox='0 0 16 16' class='bi bi-camera-video' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>";
                    iconBtn+="<path fill-rule='evenodd' d='M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175l3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z'/>";
                    iconBtn+="</svg>";
                    $("#iconVideo").replaceWith(iconBtn);
              }
});

        $("#btnShare").on('click',function(){
        startCapture(event.mediaElement);
        });

        };
        $("#userCount").text(connection.getAllParticipants().length+1);

        window.onload = function() {
            connection.openOrJoin(connection.sessionid || 'predefiend-roomid');
        };

        connection.onUserStatusChanged=function(event,dontWriteLogs){
            !dontWriteLogs
            &&
            $("#userStatus").text(cutName(event.userid)+" "+event.status);
            document.getElementById("userStatusContainer").style.visibility = "visible";
            setTimeout(function(){
                document.getElementById("userStatusContainer").style.visibility = "hidden";
             },3000);

             $("#userCount").text(connection.getAllParticipants().length+1);

        };

function cutName(string){
    string=string.slice(0,string.indexOf('.'));
    return string;
}
function cutAvatar(string){
    string=string.slice(string.indexOf('.')+1,string.length);
    return string;
}

async function startCapture(videocap) {

    try {
      videocap.srcObject = await navigator.mediaDevices.getDisplayMedia(displayMediaOptions);

      connection.dontAttachStream = false;
      connection.renegotiate();
    } catch(err) {
      console.error("Error: " + err);
    }
  }

