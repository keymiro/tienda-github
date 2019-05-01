<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

Route::get('/',[
    'as'=>'index',
    'uses'=>'StoreController@index'
    ]);
// traer el detalle del producto//
Route::get('product/{slug}',[
    'as'=>'product-detail',
    'uses'=>'StoreController@show'
    ]);

    //carrito----//
Route::get('cart/show', [
        'as' => 'cart-show',
        'uses' => 'CartController@show'
    ]);  
//agregar producto//

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);
//borrar producto//
Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

//vaciar carrito//
Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);
//actulizar el total del precio al actulizar el numero de productos agregados//
Route::get('cart/update/{product}/{quantity?}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'

]);
//verificara que halla iniciado sesion antes de ir al detalle de la compra//

Route::get('order-detail', [
    'middleware' => 'auth',
    'as' => 'order-detail',
    'uses' => 'CartController@orderDetail'
]);









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas a los controladores de los cruds
Route::group(['middleware' => 'auth'], function()
{
Route::resource('user','UsersController');
Route::resource('roles','RolesController');


//rutas a los metodos del del controlador del crud de usuarios
Route::get('users/{id}/create',[ 'uses' => 'UsersController@create', 'as' => 'users.index.create']);
Route::get('users/{id}/destroy',['uses' => 'UsersController@destroy', 'as' => 'users.index.destroy']);
Route::get('users/{id}/edit',['uses' => 'UsersController@edit', 'as' => 'users.index.edit']);

//rutas a los metodos del del controlador del crud de roles
Route::get('roles/{id}/create',['uses' => 'RolesController@create', 'as' => 'roles.index.create']);
Route::get('roles/{id}/destroy',['uses' => 'RolesController@destroy', 'as' => 'roles.index.destroy']);
Route::get('roles/{id}/edit',['uses' => 'RolesController@edit', 'as' => 'roles.index.edit']);

//admin//
Route::resource('admin/category', 'admin\CategoryController');
});