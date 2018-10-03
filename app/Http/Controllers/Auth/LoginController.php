<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;
use App\User;
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        if($provider == 'google') {
            $user = Socialite::driver($provider)->stateless()->user();
            $checkgmail = User::where('email', $user->email)->where('provider_id', null)->first();
            if ($checkgmail) {
                return redirect()->Route('login')->with('status', 'This email is used by someone!!');

            } else {
                $authUser = $this->findOrCreateUser($user, $provider);
                Auth::Login($authUser, false);
                return redirect($this->redirectTo);
            }
        }

        if($provider == 'facebook'){
            $user = Socialite::driver($provider)->stateless()->user();
            $authUser = $this->findOrCreateUser($user, $provider);
            Auth::Login($authUser, true);
            return redirect($this->redirectTo);
        }
    }

    public function findOrCreateUser($user,$provider){
        $authUser = User::where('provider_id',$user->id)->first();
        if ($authUser){
            return $authUser;
        }else{
            return User::create([
                'name' => $user->name,
                'email' => $user->email,
                'provider' => strtoupper($provider),
                'provider_id' => $user->id,
            ]);
        }
    }
}
