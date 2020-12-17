<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Events\ChatEvent;
use Session;
class ChatController extends Controller
{
    public function fireEvent(Request $request){
        $sms = $request->sms;
        $idRoom = $request->idRoom;
        $Username = $request->Username;
        $mess = $Username.": ".$sms;
        $session_idRoom = $request->session()->get('idRoom');
       
        if($session_idRoom==$idRoom){
          // Truyền message lên server Pusher
          event(new ChatEvent($mess,$idRoom));
             echo $session_idRoom.": ".$idRoom;
        }
    }
}
