<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
use Session;
class SocialController extends Controller
{
public function redirect($provider)
{
   
    return Socialite::driver($provider)->redirect();
}
 
public function callback($provider)
{
           
    $getInfo = Socialite::driver($provider)->user();
    
    $user = $this->createUser($getInfo,'google');
    $id = $user->id;
    $name = $user->name;
    $email = $user->email;
    $avatar = $user->avatar;
    $provider = $user->provider;
    $provider_id = $user->provider_id;
    $email_verified_at = $user->email_verified_at;
    $password = $user->password;
    $remember_token = $user->remember_token;
    $created_at= $user->created_at;
    $updated_at = $user->updated_at;
    
    
    Session::put('id',$id);
    Session::put('name',$name);
    Session::put('email',$email);
    Session::put('avatar',$avatar);
    Session::put('provider',$provider);
    Session::put('provider_id',$provider_id);
    Session::put('email_verified_at',$email_verified_at);
    Session::put('password',$password);
    Session::put('remember_token',$remember_token);
    Session::put('created_at',$created_at);
    Session::put('updated_at',$updated_at);

    return redirect()->to('/index/'.$provider_id);
 
}
function createUser($getInfo,$provider){
 
    $user = User::where('provider_id', $getInfo->id)->first();
    
    if (!$user) {
        $user = User::create([
            'name'     => $getInfo->name,
            'email'    => $getInfo->email,
            'avatar'    => $getInfo->avatar,
            'provider' => $provider,
            'provider_id' => $getInfo->id
        ]);
    }
    return $user;
    }
}