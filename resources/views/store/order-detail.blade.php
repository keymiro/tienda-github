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
                    <tr><td>Apellido:</td><td>{{ Auth::user()->apellidos }}</td></tr>
                    <tr><td>Documento:</td><td>{{ Auth::user()->documento }}</td></tr>
                    <tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
                    <tr><td>Dirección:</td><td>{{ Auth::user()->direccion }}</td></tr>
                </table>
            </div>
            <hr>
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
                <hr>
                <h3>
					<span class="badge badge-success">
						Total: ${{ number_format($total, 2) }}
					</span>
                </h3>
                <hr>
                <p>
                    <a href="{{ route('cart-show') }}" class="btn btn-primary">
                        <i class="fa fa-chevron-circle-left"></i> Regresar
                    </a>


                    <a href="{{ route('payment') }}" class="btn btn-warning">


                        Pagar con <i class="fab fa-paypal fa_custom fa-2x"  > </i>
                    </a>







                    <a href="{{route('exportar.pdf')}}" class="btn btn-dark">
                      Generar PDF <i class="fa fa-file-pdf-o"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
    </div>

@stop