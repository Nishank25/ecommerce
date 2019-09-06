<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
//use Auth;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showAdminLoginForm()
    {
        $data['user_type'] = 'Admin';
        return view('auth.login',$data);
    }

    /**
     * @return string
     */
    public function redirectTo(){
        $user = Auth::user();
        if($user['role_id'] == 1){
            return '/dashboard';
        }else{
            return '/my_account';
        }
    }

    /**
     * @param Request $request
     * @param $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        $result = User::where('email',Auth::user()->email)->first();
        if(!empty($result)){
            session(['subscribe_status' => TRUE]);
        }
        return redirect()->intended($this->redirectPath());
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect('/admin');
    }
}
