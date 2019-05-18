@extends('store.template')


@section('content')
    @if(Auth::user()->rol_id == 2 &  3)
    <hr>
    <div class="container text-center">


        <h1><i class="fa fa-rocket"></i>  DASHBOARD</h1>
        <hr>

        <div>
            <div class="product-block">
                <p>   <div>Bienvenido (a) &nbsp{{auth()->user()->name}} &nbsp{{auth()->user()->apellidos}} al Panel de administración de tu tienda en línea.</p>
            </div>

            <div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                <div class="row">


                    <div class="col-md-6">
                        <div>
                            <h1 align="center">CATEGORIAS</h1>
                            <a href="categorias" class="btn btn-success btn-block btn-home-admin"><i class="fa fa-list-alt fa-5x  icon-home"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <h1 align="center">PRODUCTOS</h1>

                            <a href="#" class="btn btn-success btn-block btn-home-admin"> <i class="fa fa-shopping-cart fa-5x  icon-home"></i></a>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">


                    <div class="col-md-6">
                        <div>
                            <h1 align="center">PEDIDOS</h1>

                            <a href="#" class="btn btn-success btn-block btn-home-admin"><i class="fab fa-paypal fa_custom fa-5x  icon-home"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <h1 align="center">USUARIOS</h1>
                            <a href="{{ url('user') }}" class="btn btn-success btn-block btn-home-admin">
                                <i class="fa fa-users fa-5x   icon-home"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <hr>
        <br>
    @endif
@endsection
