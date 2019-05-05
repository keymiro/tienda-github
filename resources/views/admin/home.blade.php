@extends('store.template')

@section('content')
    <div clas="container text-center">
    <div class="product-block">

        <div class="page-header">
            <h1><i class="fa fa-rocket"></i> MY LARAVEL STORE - DASHBOARD</h1>
        </div>

        <h2>Bienvenido(a)</h2><hr>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">

                    <a href="#" class="btn btn-warning btn-block btn-home-admin">ROLES
                        <i class="fa fa-list-alt icon-home"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-shopping-cart  icon-home"></i>
                    <a href="#" class="btn btn-warning btn-block btn-home-admin">PRODUCTOS</a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-cc-paypal  icon-home"></i>
                    <a href="#" class="btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                   </i>
                    <a href="#" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
                </div>
            </div>

        </div>

    </div>
 </div>
    <hr>

@stop