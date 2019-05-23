@extends('store.template')

@section('content')
    <br>
    <div class="container">

        @if(Auth::user()->rol_id == 1)
            <hr>
            <div class="container-fluid" align="center">
                <h4>ACCESO NO AUTORIZADO
                    <a href="{{ route('index') }}" class="btn btn-primary">
                        <i class="fa fa-chevron-circle-left"></i> VOLVER AL CATALOGO
                    </a> </h4>
                <hr>
                @endif


        @if(Auth::user()->rol_id == 2 &  3)
        <div class="row justify-content-center">
            <div class="product-block">

                <div class="card-header" align="center"><h1><span class="badge badge-light"> <i class="fa fa-list-alt"> </i>  LISTADO DE CATEGORIAS </span></h1>
                </div>

                <br>
                <div class="container" align="center">


                        <a href="{{ url('/categorias/create') }}" class="btn btn-dark btn-block" align="center"> <i
                                    class="fa fa-plus" style="font-size:20px"> </i> </a><br>


                </div>
                <br>
                <div class="container-fluid table-responsive" style="text-align:center" align="center">
                    <table class="table table-striped   table-responsive table-hover" class="justify-content-center">
                        <thead class="thead-dark ">
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <TH>SLUG</TH>
                        <TH>DESCRIPCION</TH>
                        <TH>COLOR</TH>
                        <th>ACCION</th>
                        </thead>
                        <tbody>

                        @foreach($categorias as $categorias)
                            <tr>
                                <td> {{ $categorias -> id }}</td>
                                <td> {{ $categorias -> name }}</td>
                                <td> {{ $categorias -> slug }}</td>
                                <td> {{ $categorias -> description }}</td>
                                <td> {{ $categorias -> color }}</td>
                                <TD>
                                    <a href="{{ route('categorias.index.edit', $categorias->id) }}" class="btn btn-warning"> <i
                                                class="fa fa-edit" style="font-size:12px"> </i> </a>

                                    <a href="{{ route('categorias.index.destroy', $categorias->id) }}"
                                       onclick="return confirm('¿Eliminar Categoria?')" class="btn btn-danger">
                                        <i class="fa fa-trash-alt" style="font-size:12px"></i>
                                    </a>

                                </TD>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
                <hr>
                <a href="javascript:history.back()" class="btn btn-block btn-dark"><i class="fa fa-arrow-left "></i>  Volver Atrás</a>


            </div>
        </div>
    </div>
    @endif
@endsection
