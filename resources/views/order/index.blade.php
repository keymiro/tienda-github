@extends('store.template')

@section('content')<br>
    <div class="container text-center">
        <div class="product-block">
        <div class="page-header">
            <h1>
                <span class="badge badge-light"> <i class="fab fa-paypal fa_custom "></i> LISTA DE PEDIDOS </span>
            </h1>
            <hr>
        </div>

        <div class="page">

            <div class="table-responsive">
                <table class="table table-striped    table-hover" >
                    <thead class="thead-dark">

                    <tr>
                        <th>#</th>
                        <th>FECHA</th>
                        <th>USUARIO</th>
                        <th>SUBTOTAL</th>
                        <th>ENVIO</th>
                        <th>TOTAL</th>
                        <th>ACCION</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td> {{ $order -> id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->user->name . " " . $order->user->last_name }}</td>
                            <td>${{ number_format($order->subtotal,2) }}</td>
                            <td>${{ number_format($order->shipping,2) }}</td>
                            <td>${{ number_format($order->subtotal + $order->shipping,2) }}</td>

                            <td>
                                <a
                                        href="#"
                                        class="btn btn-primary btn-detalle-pedido"
                                        data-id="{{ $order->id }}"
                                        data-path="{{ route('order.getItems') }}"
                                        data-toggle="modal"
                                        data-target="#myModal"
                                        data-token="{{ csrf_token() }}"
                                >
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('order.destroy' , $order->id) }}" onclick="return confirm('¿Eliminar Pedido?')" class="btn btn-danger">
                                    <i class="fa fa-trash-alt" style="font-size:12px"></i>


                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <hr>

            <?php echo $orders->render(); ?>

        </div>
            </div>
    </div>

    @include('store.partials.modal-detalle-pedido')

@stop