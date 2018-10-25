<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use DB;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function logout(){
        Auth::logout();
        session()->forget('data');
        return redirect($this->redirectTo)->with('status','Bạn đã đăng xuất');
    }

    public function LoginNormal(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $name = null;
        $id = null;

        if(Auth::attempt(array('email'=>$email,'password'=>$password))){
            $user = User::where('email',$email)->first();
            $name = $user->username;
            $id = $user->id;
            session()->put('data',['id' => $id,'name' => $name]);
            Auth::Login($user,true);
            return redirect($this->redirectTo)->with('status','Đăng nhập thành công !!');
        }else{
            return redirect($this->redirectTo)->with('notice','Tài khoản này không tồn tại !!');
        }
    }

    public function handleProviderCallback($provider)
    {
        if($provider == 'google') {
            $user = Socialite::driver($provider)->stateless()->user();
            $checkgmail = User::where('email', $user->email)->where('provider_id', null)->first();
            if ($checkgmail) {
//                return redirect('/')->with('notice', 'This email is used by someone!!');
                return redirect('/')->with('notice', 'Tài khoản này đã được sử dụng bởi người nào đó!!');

            } else {
                $authUser = $this->findOrCreateUser($user, $provider);
                Auth::Login($authUser, true);
                session()->put('data',['id' => $authUser->id,'name' => $authUser->username]);
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

    public function findOrCreateUser($user,$provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        } else {

            $account = User::create([
                'username' => $user->name,
                'email' => $user->email,
                'provider' => strtoupper($provider),
                'provider_id' => $user->id,
                'is_admin' => 1
            ]);

            $account_detail = new \App\UserDetails();

            $account_detail->id_account = $account->id;
            $account_detail->name = $user->name;
            $account_detail->avatar_path = $user->avatar;

            $account_detail->save();

            return $account;
        }
    }
}
