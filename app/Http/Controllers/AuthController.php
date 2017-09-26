<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){

        if (Auth::check())
        {

            return Redirect::to('/user');
        }

        return view('login');
    }

    public function postLogin(Request $request)
    {
        if ($request->isMethod('post')) {

            $datos = array('email'=>$request->input("email"),
                            'password' =>$request->input("pass"));

            if(Auth::attempt($datos))
            {
                return Redirect::to('/profile');
            }
            return Redirect::to('login')->with('mensaje_error', 'Tus datos son incorrectos')->withInput();

        }else
        {
            return view('login');
        }

    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('login')
            ->with('mensaje_error', 'La sesión ha sido cerrada.');
    }
}
