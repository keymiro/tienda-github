@extends('store.template')

@section('content')
    <br>
    <div class="container">

        <div class="row justify-content-center">
            <div class="product-block">

                <div class="card-header" align="center"><h1><span class="badge badge-light"> <i class="fa fa-at"> </i>  LISTADO DE PRODUCTOS </span></h1>
                </div>

                <br>
                <div class="container" align="center">
                    @if(Auth::user()->rol_id == 2)

                        <a href="{{ url('/productos/create') }}" class="btn btn-dark" align="center"> <i
                                    class="fa fa-plus" style="font-size:20px"> </i> </a><br>

                    @endif
                </div>
                <br>
                <div class="container-fluid table-responsive" style="text-align:center" align="center">
                    <table class="table table-striped   table-responsive table-hover" class="justify-content-center">
                        <thead class="thead-dark ">
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <TH>SLUG</TH>
                        <TH>ESTRACTO</TH>
                        <th>PRECIO</th>
                        <th>IMAGEN</th>
                        <th>VISIBILIDAD</th>
                        <th>CATEGORIA</th>
                        <th>ACCION</th>
                        </thead>
                        <tbody>

                        @foreach($productos as $productos)
                            <tr>
                                <td> {{ $productos -> id }}</td>
                                <td> {{ $productos -> name }}</td>
                                <td> {{ $productos -> slug }}</td>
                                <td> {{ $productos -> extract }}</td>
                                <td> {{ $productos -> price }}</td>
                                <td> <img src="{{ $productos -> image }}" style='width:80px'> </td>
                                <td> {{ $productos -> visible ==1 ? "Si" : "No" }}</td>
                                <td> {{ $productos -> category -> name }}</td>
                                <TD>
                                    <a href="{{ route('productos.index.edit', $productos->id) }}" class="btn btn-warning"> <i
                                                class="fa fa-edit" style="font-size:12px"> </i> </a>

                                    <a href="{{ route('productos.index.destroy', $productos->id) }}"
                                       onclick="return confirm('¿Eliminar Producto?')" class="btn btn-danger">
                                        <i class="fa fa-trash-alt" style="font-size:12px"></i>
                                    </a>



                                </TD>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div>
@endsection

