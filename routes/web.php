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
//envia el pedido

Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));

// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas a los controladores de los cruds  restringe el acceso a vista del administrador
Route::group(['middleware' => 'auth'], function()
{
Route::resource('user','UsersController');
Route::resource('roles','RolesController');
Route::resource('categorias','CategoriasController');



//rutas a los metodos del del controlador del crud de usuarios
Route::get('users/{id}/create',[ 'uses' => 'UsersController@create', 'as' => 'users.index.create']);
Route::get('users/{id}/destroy',['uses' => 'UsersController@destroy', 'as' => 'users.index.destroy']);
Route::get('users/{id}/edit',['uses' => 'UsersController@edit', 'as' => 'users.index.edit']);

//rutas a los metodos del del controlador del crud de roles
Route::get('roles/{id}/create',['uses' => 'RolesController@create', 'as' => 'roles.index.create']);
Route::get('roles/{id}/destroy',['uses' => 'RolesController@destroy', 'as' => 'roles.index.destroy']);
Route::get('roles/{id}/edit',['uses' => 'RolesController@edit', 'as' => 'roles.index.edit']);

//rutas a los metodos del del controlador del crud de categorias
    Route::get('categorias/{id}/create',['uses' => 'CategoriasController@create', 'as' => 'categorias.index.create']);
    Route::get('categorias/{id}/destroy',['uses' => 'CategoriasController@destroy', 'as' => 'categorias.index.destroy']);
    Route::get('categorias/{id}/edit',['uses' => 'CategoriasController@edit', 'as' => 'categorias.index.edit']);


});
//admin//
Route::resource('admin/category', 'admin\CategoryController');
Route::get('admin/home',function (){
   return view('admin.home');
});
//pdf//
Route::get('expor-pdf','CartController@exportPdf')->name('exportar.pdf');


