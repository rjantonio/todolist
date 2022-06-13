<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

/* use App\Models\Tarea;
use App\Models\Etiqueta; */

class LoginController extends Controller
{
    public function show() {
        //comprueba si hay sesión iniciada y redirige a home
        /* if(Auth::check()){
            return redirect('/home');
        } */

        /* if (Session::get('usuario')==null) {
            return redirect('/home');
        } */
        return view('auth.login');
    }

    public function login(LoginRequest $request) {

        //obtiene los valores del formulario login, comprueba que correspondan con los de la bbdd y crea una sesión, asimismo, redirige al home
        $credentials = $request->getCredentials();


        if (!Auth::validate($credentials)) {
            return view('auth.login')->with('error', 1);
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);


        //$request->session()->put('nombre', $credentials['email']);

        //return $this->authenticated($request, $user);

        session(['usuario' => $user]);

        /* $etiquetas = Etiqueta::all();
        $tareas = Tarea::all(); */

        return view('home.index');

    }

    /* public function authenticated(Request $request, $user) {
        return redirect('/home')->with('usuario', $user);
    } */
}
