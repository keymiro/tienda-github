<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Product::all();
        $productos->each(function ($productos) {
            $productos->category;
        });
        return view('products.index')->with('productos', $productos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        return view ('products.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Product($request->all());
        $productos->name = $request['name'];
        $productos->slug = $request['slug'];
        $productos->extract = $request['extract'];
        $productos->price = $request['price'];
        $productos->image = $request['image'];
        $productos->visible = $request['visible'];
        $productos->category_id = $request['category_id'];

        $productos->save();

        $message = $request ? 'Producto agregado correctamente!' : 'El Producto NO pudo agregarse!';
        return redirect('/productos')->with('message', $message);;
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
        $categorias = Category::all();
        $productos = Product::find($id);
        return view ('products.edit', compact('categorias'))->with('productos',$productos);
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
        $productos = Product::find($id);
        $productos->name = $request['name'];
        $productos->slug = $request['slug'];
        $productos->extract = $request['extract'];
        $productos->price = $request['price'];
        $productos->image = $request['image'];
        $productos->visible = $request['visible'];
        $productos->category_id = $request['category_id'];
        $productos->save();
        $message = $id ? 'Producto editado correctamente!' : 'El Producto NO pudo editarse!';
        return redirect('/productos')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Product::find($id);
        Product::where('id', $id)->delete();
        $message = $id ? 'Producto eliminado correctamente!' : 'El Producto NO pudo eliminarse!';
        return redirect('/productos')->with('message', $message);
    }
}
