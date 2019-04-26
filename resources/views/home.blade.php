@extends('store.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                <div class="card-header"  >Bienvenido (a) &nbsp{{auth()->user()->name}} &nbsp{{auth()->user()->apellidos}}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ha iniciado sesion!
                        <hr>
                    Compra exitosa
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection
