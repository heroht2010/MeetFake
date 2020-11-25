<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferenceRoomController extends Controller
{
    public function viewConferenceRoom(Request $request)
    {
        $idRoom=$request->r;
        return view('home.ConferenceRoom.index',compact('idRoom'));
    }
}
