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
        echo "Controller";
        event(new ChatEvent($mess,$idRoom));
    }
}
