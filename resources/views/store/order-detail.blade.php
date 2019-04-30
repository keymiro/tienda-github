@extends('store.template')

@section('content')
    <br>
    <div class="container text-center">
        <div class="product-block">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i> Detalle del pedido</h1>
        </div>

        <div class="page">
            <div class="table-responsive">
                <h3>Datos del usuario</h3>
                <table class="table table-striped table-hover ">
                    <tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
                    <tr><td>Usuario:</td><td>{{ Auth::user()->apellidos }}</td></tr>
                    <tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
                    <tr><td>Dirección:</td><td>{{ Auth::user()->direccion }}</td></tr>
                </table>
            </div>
            <div class="table-responsive">
                <h3>Datos del pedido</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    @foreach($cart as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>${{ number_format($item->price,2) }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->price * $item->quantity,2) }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>

@stop