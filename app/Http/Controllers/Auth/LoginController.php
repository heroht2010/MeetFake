<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
  * Redirect the user to the Google authentication page.
  *
  * @return \Illuminate\Http\Response
  */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {

        $getInfo = Socialite::driver('google')->user();
        $user = $this->createUser($getInfo,'google');
       
        
        if(Auth::login($user)){
            session()->put('iduser',$getInfo->getId());
            session()->put('avartar',$getInfo->getAvatar());
            session()->put('name',$getInfo->getName());
            session()->put('email',$getInfo->getEmail());
            session()->put('avatar',$getInfo->getAvatar());
            session()->put('provider_id',$getInfo->getId());  
            
        }

        return redirect('');
        
    }
    function createUser($getInfo){
 
        $user = User::where('provider_id', $getInfo->id)->first();
        
        if (!$user) {
            $create = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'avatar'    => $getInfo->avatar,
                'provider' => 'google',
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}
