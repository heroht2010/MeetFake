<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class ConferenceRoomController extends Controller
{
    public function viewConferenceRoom(Request $request)
    {
        $idRoom=$request->r;
        Session::put('idRoom',$idRoom);
        return view('home.ConferenceRoom.index',compact('idRoom'));
    }
}
