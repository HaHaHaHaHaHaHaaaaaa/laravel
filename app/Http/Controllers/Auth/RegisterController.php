<?php

namespace App\Http\Controllers\Auth;

use App\models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Input;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    
    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator()
    {
        $data=array('username'=>Input::get('username'),'password'=>Input::get('password'));
        /* return $data; */
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:1|confirmed',
        ]);
  
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create()
    {
        $data=array('username'=>Input::get('username'),'password'=>Input::get('password'));
        return User::create([
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
