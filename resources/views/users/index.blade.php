
@extends('store.template')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="card">
<div class="card-header" align="center"> <p>LISTA DE USUARIOS </p> </div>


<a href="{{ url('/user/create') }}" class="btn btn-success" style="justify-content-right" >CREAR USUARIO</a><hr>
<div class="table-responsive" style="text-align:center">
<table class="table table-striped   table-responsive table-hover" class="justify-content-center" >
<thead class="thead-dark ">
<th>ID</th>
<th>NOMBRES</th>
<TH>APELLIDOS</TH>
<TH>DOCUMENTO DE IDENTIFICACION</TH>
<TH>DIRECCION</TH>  
<TH>TELEFONO</TH>
<th>EMAIL</th>
<th>ACCCION</th>
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
<td> {{ $user -> email }}</td>
<TD>
<a href="{{ route('users.index.edit', $user->id) }}" class="btn btn-warning">EDITAR</a>
    <hr>
<a href="{{ route('users.index.destroy' , $user->id) }}" onclick="return confirm('¿Eliminar Usuario?')" class="btn btn-danger">ELIMINAR</a>
</TD>
</tr>
@endforeach

</tbody>
</table>
{{ $users->render()}}
</div>




</div>
</div>
</div>
@endsection
