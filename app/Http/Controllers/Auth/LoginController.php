<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = '/home';

    //funcion que redirige dependiendo del
    //rol que tenga el ususario a ingresar
    public function redirectTo(){

        // User role
        $role = Auth::user()->tipo;

        // Check user role
        /* mover aqui poner hacia donde es el redireccionamiento
        switch ($role) {
            case 'Instructor':
                    return '/';
                break;
            case 'Responsable':
                    return '/';
                break;
            case 'Division':
                    return '/';
                break;
            case 'Alumnos':
                    return '/';
                break;
            default:
                    return '/login';
                break;
        }
        */
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
