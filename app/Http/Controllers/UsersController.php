<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Persona;
use App\Role;
use DB;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);
        $users->each(function ($users) {
            $users->rol;
        });

        return view('users.index')->with('users', $users);

    }
    //, compact('users')

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $persona = new Persona;
        $persona->nombres = $request['name'];
        $persona->apellidos = $request['apellidos'];
        $persona->documento = $request['documento'];
        $persona->direccion = $request['direccion'];
        $persona->fechanacimiento = $request['fechanacimiento'];
        $persona->telefono = $request['telefono'];
        $persona->save();


        $user = new User;
        $user->name = $request['name'];
        $user->apellidos = $request['apellidos'];
        $user->persona_id = $persona->id;
        $user->rol_id = $request['rol_id'];
        $user->documento = $request['documento'];
        $user->direccion = $request['direccion'];
        $user->fechanacimiento = $request['fechanacimiento'];
        $user->telefono = $request['telefono'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();


        return redirect('/user');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);
        return view('users.edit', compact('roles'))->with('user', $user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->name;
        $user->apellidos = $request->apellidos;
        $user->documento = $request->documento;
        $user->direccion = $request->direccion;
        $user->telefono = $request->telefono;
        $user->rol_id = $request->rol_id;
        $user->email = $request->email;
        $user->save();

        $persona = Persona::find($user->persona_id);
        $persona->nombres = $request->name;
        $persona->apellidos = $request->apellidos;
        $persona->documento = $request->documento;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->save();

        return redirect('/user');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    //metodo eliminar el curs de usuarios
    //boton eliminar
    public function destroy($id)
    {

        $user = User::find($id);
        User::where('id', $id)->delete();

        $persona = Persona::find($user->persona_id);
        Persona::where('id', $persona->id)->delete();

        //$user->delete ();

        return redirect('/user');
    }
}
