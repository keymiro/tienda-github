@extends('store.template')

@section('content')
    <br> @if(Auth::user()->rol_id == 1)
        <hr>
        <div class="container-fluid" align="center">
            <h4>ACCESO NO AUTORIZADO
                <a href="{{ route('index') }}" class="btn btn-primary">
                    <i class="fa fa-chevron-circle-left"></i> VOLVER AL CATALOGO
                </a> </h4>
            <hr>
            @endif
    <div class="container">
        @if(Auth::user()->rol_id == 2 &  3)
        <div class="row justify-content-center">
            <div class="product-block">

                <div class="card-header" align="center"><h1><span class="badge badge-light"> <i class="fa fa-users"> </i>  LISTADO USUARIOS</span></h1>
                </div>

                <br>
                <div class="container" align="center">
                    @if(Auth::user()->rol_id == 2)

                        <a href="{{ url('/user/create') }}" class="btn btn-success btn-block" align="center"> <i
                                    class="fa fa-user-plus" style="font-size:20px"> </i> </a><br>

                    @endif
                </div>
                <br>
                <div class="container-fluid table-responsive" style="text-align:center" align="center">
                    <table class="table table-striped   table-responsive table-hover" class="justify-content-center">
                        <thead class="thead-dark ">
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <TH>APELLIDOS</TH>
                        <TH>DOCUMENTO</TH>
                        <TH>DIRECCION</TH>
                        <TH>TELEFONO</TH>
                        <th>ROL</th>
                        <th>EMAIL</th>
                        <th>ACCION</th>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td> {{ $user -> id }}</td>
                                <td> {{ $user -> name }}</td>
                                <td> {{ $user -> apellidos }}</td>
                                <td> {{ $user -> documento }}</td>
                                <td> {{ $user -> direccion }}</td>
                                <td> {{ $user -> telefono }}</td>
                                <td> {{ $user -> rol-> nombre }} </td>
                                <td> {{ $user -> email }}</td>
                                <TD>
                                    <a href="{{ route('users.index.edit', $user->id) }}" class="btn btn-warning"> <i
                                                class="fa fa-user-edit" style="font-size:12px"> </i> </a>

                                    <a href="{{ route('users.index.destroy' , $user->id) }}"
                                       onclick="return confirm('¿Eliminar Usuario?')" class="btn btn-danger">
                                        <i class="fa fa-user-times" style="font-size:12px"></i>
                                    </a>

                                </TD>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {{ $users->render()}}
                </div>

                <hr>
                <a href="javascript:history.back()" class="btn btn-block btn-dark"><i class="fa fa-arrow-circle-left "></i>  Volver Atrás</a>


            </div>
        </div>
    </div>
    @endif
@endsection
