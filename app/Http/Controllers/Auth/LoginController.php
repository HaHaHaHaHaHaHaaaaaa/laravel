<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Input;
use Auth;
use Validator;
use Eloquent;
use Hash;
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

    public function getLogin()
    {
        if (Auth::check()) {
            return view('welcome', ['psd'=>$psd]);
        }
        return view('login');
    }
    

    public function postLogin()
    {
        $psd= Input::get('password');
        $user=Input::get('username');
        $rules = array(
            'username' => 'Required',
            'password' => 'Required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if (Auth::attempt(['username' => $user, 'password' => $psd])) {
            // 认证通过...
            return view('welcome');
        
        } else {
            echo 'error';
        }
    }
}
