<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::all();
        return view('categorias.index')->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias = new Category($request->all());
        $categorias->name = $request['name'];
        $categorias->slug = $request['slug'];
        $categorias->description = $request['description'];
        $categorias->color = $request['color'];
        $categorias->save();
        $message = $request ? 'Categoria agregada correctamente!' : 'La Categoria NO pudo agregarse!';
        return redirect('/categorias')->with('message', $message);



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
        $categorias = Category::find($id);
        return view ('categorias.edit')->with('categorias',$categorias);
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
        $categorias = Category::find($id);
        $categorias->name = $request->name;
        $categorias->slug = $request->slug;
        $categorias->description = $request->description;
        $categorias->color = $request->color;
        $categorias->save();
        $message = $id ? 'Categoria editada correctamente!' : 'La Categoria NO pudo editarse!';
        return redirect('/categorias')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias = Category::find($id);
        Category::where('id', $id)->delete();
        $message = $id ? 'Categoria eliminada correctamente!' : 'La Categoria NO pudo eliminarse!';
        return redirect('/categorias')->with('message', $message);


    }
}
