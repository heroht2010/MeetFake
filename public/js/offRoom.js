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
