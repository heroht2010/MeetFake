<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Events;
use Redirect,Response,Session;
use App\Eloquent;
use Illuminate\Support\Str;
use Carbon\Carbon;
class CalendarController extends Controller
{
    public function logout(){
        Session::pull('id');
        Session::pull('iduser');
        Session::pull('name');
        Session::pull('email');
        Session::pull('avatar');
        Session::pull('avartar');
        Session::pull('provider_id');

        return redirect()->to('/');
    }
    public function index( $provider_id){
        $now = Carbon::now('Asia/Ho_Chi_Minh');
      //   dd($now->toDateString());
        $notification = Events::where('provider_id',$provider_id)->where('start','LIKE', '%' . $now->toDateString() . '%')->get();
        $i=0;
        foreach($notification as $item){
            $i++;
        }
        
        if($i>0){
            Alert::toast('Today you got '.$i.' meeting, check now!!! ')->autoClose(10000);
        }  
        return view('calendar.calendar');
    }
    public function listEvent($provider_id){
        $event = Events::Latest()->where('provider_id',$provider_id)->get();
        return response()->json($event,200);
    }

    public function store(Request $request)
    {
        $store = new Events;
        $store->title = $request->title;
        $store->start = $request->date."T".$request->time;
        $store->color = $request->color;
        $store->provider_id = $request->provider_id;
        $store->textColor = $request->textColor;
        if($request->link==''){
            $store->link_room=Str::random(11)."";
        }
        else{
            $store->link_room=$request->link;
        }
        $store->save();
        if($store){
            Alert::success('Success', 'Create Event Success!');
        }
        else{
            Alert::error('Error', 'Create Event Failed!');
        }
        return redirect()->back();
    }


    public function update(Request $request)
    {
        $where = array('id' => $request->id_update);
        $start = $request->date_update."T".$request->time_update;

        $updateArr = ['title' => $request->title_update,'start' => $start, 'color'=> $request->color_update, 'textColor'=> $request->textColor_update,];
        $event  = Events::where($where)->update($updateArr);

        if($event){

            Alert::success('Success', 'Update Event Success!');

        }
        else{
            Alert::error('Error', 'Update Event Failed!');

        };
        return redirect()->back();
    }


    public function delete(Request $request)
    {

        $event = Events::where('id',$request->id_delete)->delete();

        if($event){

            Alert::success('Success', 'Delete Event Success!');

        }
        else{
            Alert::error('Error', 'Delete Event Failed!');

        };
        return redirect()->back();
    }   
    
    


    //MyMeeting
    public function getMymeeting(){
        return view('calendar.mymeeting');
    } 
}
