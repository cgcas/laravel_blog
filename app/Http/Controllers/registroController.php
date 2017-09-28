<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class registroController extends Controller
{
    public function registrar(Request $request){

        if ($request->isMethod('post')) {
            $username = $request->input("username");
            $email = $request->input("email");
            $password = $request->input("password");
            $password_confirm = $request->input("password_confirm");

            $datos=array('username' => $username,
                            'email' => $email,
                            'password' => $password,
                            'password_confirm' => $password_confirm);

            //comprobacion de que el email no va en blanco
            if($email == ""){
                return view('nuevoUsuario',['error' => 'El email no puede ir en blanco','datos' => $datos]);
            }

            //comprobacion de que el usuario no va en blanco
            if($username == ""){
                return view('nuevoUsuario',['error' => 'El usuario no puede ir en blanco','datos' => $datos]);
            }

            //comprobacion de que el username no lleve espacios en blanco
            if (strpos($username, " ")){
                return view('nuevoUsuario',['error' => 'El usuario no puede llevar espacios en blanco.','datos' => $datos]);
            }


            //comprobacion de que el email no exista en la base de datos
            $numEmail = User::where('email','=',"$email")->count();
            if($numEmail>0){
                return view('nuevoUsuario',['error' => 'El email introducido ya existe en la base de datos','datos' => $datos]);
            }

            //comprobacion de que la contraseña no sea inferior a 5 caracteres
            $numCar = strlen($password);
            if($numCar<5) {
                return view('nuevoUsuario',['error' => 'La contraseña es inferior a 5 caracteres','datos' => $datos]);
            }

            //comprobacion de que la contraseña no lleve espacios en blanco
            if (strpos($password, " ")){
                return view('nuevoUsuario',['error' => 'La contraseña no puede llevar espacios en blanco.','datos' => $datos]);
            }

            //Comprobamos si las dos contraseñas son iguales
            if($password != $password_confirm){
                return view('nuevoUsuario',['error' => 'Las contraseñas tienen que coincidir','datos' => $datos]);
            }

            $usuarcillo = new User;
            $usuarcillo->nombre = $username;
            $usuarcillo->email = $email;
            $usuarcillo->pass = $password;
            $usuarcillo->save();

            return view('nuevoUsuario',['acierto' => 'Bienvenid@ '.$username.' has sido registrado correctamente.']);
        }else
        {
            $datos_blanco = array('username' => '',
                'email' => '',
                'password' => '',
                'password_confirm' => '');

            return view('nuevoUsuario',['datos' => $datos_blanco]);
        }
    }
}
