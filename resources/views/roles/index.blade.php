
@extends('store.template')

@section('content')
    <br>

<div class="container">

<div class="row justify-content-center">
    <div class="product-block">
<div class="card card bg-secondary">
<div class="card-header" align="center"> <h1><span class="badge badge-primary">LISTA ROLES</span></h1></div>
    <br>

<div class="container" align="center">
<a href="{{ route('roles.create') }}" class="btn btn-success" style="justify-content-right" >CREAR ROL</a><hr>
</div>

<div class="container-fluid table-responsive" style="text-align:center" >

<table class="table table-striped   table-responsive table-hover" class="justify-content-center" class="text-justify" >
<thead class="thead-dark">
<th>ID</th>
<th>NOMBRE</th>
<th>DESCRIPCION</th>
<th>ACCION</th>
</thead>

<tbody>
@foreach($roles as $roles)
<tr>
<td> {{ $roles -> id }}</td>
<td> {{ $roles -> nombre }}</td>
<td> {{ $roles -> descripcion }}</td>

<TD>
<a href="{{ route('roles.index.edit', $roles->id) }}" class="btn btn-warning">EDITAR</a>
<a href="{{ route('roles.index.destroy' , $roles->id) }}" onclick="return confirm('¿Eliminar Usuario?')" class="btn btn-danger">
    <i class="fa fa-remove"></i>
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
</div>
@endsection
