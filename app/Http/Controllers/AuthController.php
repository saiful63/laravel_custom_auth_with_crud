<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use App\Http\Requests\AuthValidMsg as AVMsg;
use App\Http\Requests\UserLoginValid;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
    $this->user = $user;
    }

    public function register(){
        return view('auth.register');
    }

    public function register_user(AVMsg $request){

     $this->user->create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>\Hash::make($request->password)
      ]);

      //FacadesSession::flush('msg','User Registered Successfully');

      if(\Auth::attempt($request->only('email','password'))){
        return redirect('home');
      }

      return redirect('register')->withError('Invalid');

    }

    public function login(){
        return view('auth.user_login');
    }

    public function user_login(Request $request){

     if(\Auth::attempt($request->only('email','password'))){
        return redirect('home');
      }

      return redirect('user_login')->withError('Invalid credential');

    }

    public function home(){
        return view('home');
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('login');
    }
}
