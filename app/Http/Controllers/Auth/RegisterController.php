<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Persona;
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'documento' => ['required', 'string', 'max:15'],
            'direccion' => ['required', 'string', 'max:50'],
            'fechanacimiento' => ['required', 'date'],
            'telefono' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $persona = new Persona;
        $persona->nombres = $data['name'];
        $persona->apellidos = $data['apellidos'];
        $persona->documento = $data['documento'];
        $persona->direccion = $data['direccion'];
        $persona->fechanacimiento = $data['fechanacimiento'];
        $persona->telefono = $data['telefono'];
        $persona->save();


        $user = new User;
        $user->name = $data['name'];
        $user->apellidos = $data['apellidos'];
        $user->persona_id = $persona->id;
        $user->rol_id = 1;
        $user->documento = $data['documento'];
        $user->direccion = $data['direccion'];
        $user->fechanacimiento = $data['fechanacimiento'];
        $user->telefono = $data['telefono'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();
        return $user;


    }
}
