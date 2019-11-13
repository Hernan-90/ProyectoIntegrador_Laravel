<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validator(array $data)
    {
      $validate = [
        'email' => ['required', 'string', 'email', 'max:255', 'exists:usuarios,email'],
        'password' => ['required', 'string', 'min:8', 'exists:usuarios, password'],
      ];
      $message = [
        'required' => "El campo es obligatorio",
        'email.exists' => "El mail es incorrecto o no existe",
        'password.exists' => "La contraseña es incorrecta",
      ];
        return Validator::make($data, $validate, $message);
    }
}
