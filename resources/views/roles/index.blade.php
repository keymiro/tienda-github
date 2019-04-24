
@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="card">
<div class="card-header"> LISTA ROLES </div> 


<a href="{{ route('roles.create') }}" class="btn btn-outline-success" style="justify-content-right" >CREAR ROL</a><hr>
<div  style="text-align:center" >
<table class="table table-striped table-bordered table-dark" class="justify-content-center" class="text-justify" >
<thead class="thead-light">
<th>ID</th>
<th>NOMBRE</th>
<th>DESCRIPCION</th>
<th>ACCCION</th>
</thead>

<tbody>
@foreach($roles as $roles)
<tr>
<td> {{ $roles -> id }}</td>
<td> {{ $roles -> nombre }}</td>
<td> {{ $roles -> descripcion }}</td>

<TD>
<a href="{{ route('roles.index.edit', $roles->id) }}" class="btn btn-outline-warning">EDITAR</a>
<a href="{{ route('roles.index.destroy' , $roles->id) }}" onclick="return confirm('¿Eliminar Usuario?')" class="btn btn-outline-danger">ELIMINAR</a>
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
