<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $roles = Role::all();
        return view ('roles.index')->with('roles',$roles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('roles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = new Role($request->all());
        $roles->descripcion = $request['descripcion'];

        $roles->save();

        $message = $request ? 'Rol agregado correctamente!' : 'El Rol NO pudo agregarse!';
        return redirect('/roles')->with('message', $message);;



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::find($id);
        return view ('roles.edit')->with('roles',$roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roles = Role::find($id);
        $roles->nombre = $request->nombre;
        $roles->descripcion = $request->descripcion;
        $roles->save();
        $message = $id ? 'Rol editado correctamente!' : 'El Rol NO pudo editarse!';
        return redirect('/roles')->with('message', $message);
        

//        $roles->save();
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Role::find($id);
        Role::where('id', $id)->delete();
        $message = $id ? 'Rol eliminado correctamente!' : 'El Rol NO pudo eliminarse!';
        return redirect('/roles')->with('message', $message);




    }
}
