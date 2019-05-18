@extends('store.template')

@section('content')
	<hr>
<div class="container text-center">
	<div class="page-header">
	  <h1><span  class="badge badge-warning" class="fa fa-shopping-cart">Detalle del producto</span></h1>
	</div><hr>

	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->image }}">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $product->description }}</p>
					<h3>
						<span class="badge badge-success">Precio: ${{ number_format($product->price,2) }}</span>
					</h3>
					<p>
						<a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug) }}">
							La quiero <i class="fa fa-cart-plus fa-2x"></i>
						</a><hr>
					</p>
				</div>
			</div>	
		</div>
	</div><hr>

	<p>
		<a class="btn btn-primary" href="{{ route('home') }}">
			<i class="fa fa-chevron-circle-left"></i> Regresar
		</a>
	</p>
</div>
@stop
