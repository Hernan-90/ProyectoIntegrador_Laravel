<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
    protected function validator(array $data)
    {
      $validate = [
        'name' => ['required', 'string', 'max:255'],
        'emailR' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone' => ["numeric","nullable"],
        'avatar' => ["file", "image", "nullable"],
        'passwordR' => ['required', 'string', 'min:8', 'confirmed'],
        'passwordR_confirmation' => ['required', 'string'],
      ];
      $message = [
        'required' => "El campo es obligatorio",
        'min' => "El campo debe tener minimo 8 caracteres",
        'confirmed' => "La contraseña no es la misma",
      ];
        return Validator::make($data, $validate, $message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $req = request ();
      if (isset($data['avatar'])){
      $ruta = $req->file("avatar")->store("public");
      $nombreArchivo = basename($ruta);
      } else {$nombreArchivo = null;}
        return User::create([
            'name' => $data['name'],
            'emailR' => $data['emailR'],
            'phone' => $data['phone'],
            'avatar' => $nombreArchivo,
            'passwordR' => Hash::make($data['passwordR']),
        ]);
    }
}
