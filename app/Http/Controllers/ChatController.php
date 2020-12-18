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
<<<<<<< HEAD
          // Truyền message lên server Pusher
          event(new ChatEvent($mess,$idRoom));

=======
        echo "controller";
        // Truyền message lên server Pusher
        event(new ChatEvent($mess,$idRoom));
>>>>>>> cd86236004320a4e99b6f89c2a1f5b2a2207db30
    }
}
