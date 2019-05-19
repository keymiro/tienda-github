@extends('store.template')

@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registrar Producto</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('productos.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="slug" class="col-md-4 col-form-label text-md-right">Slug</label>

                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') }}" required autofocus>

                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="extract" class="col-md-4 col-form-label text-md-right">Descripcion</label>

                                <div class="col-md-6">
                                    <input id="extract" type="text" class="form-control{{ $errors->has('extract') ? ' is-invalid' : '' }}" name="extract" value="{{ old('extract') }}" required autofocus>

                                    @if ($errors->has('extract'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('extract') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Precio</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Imagen</label>

                                <div class="col-md-6">
                                    <input id="image" type="text" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required autofocus>

                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="visible" class="col-md-4 col-form-label text-md-right">Visibilidad</label>

                                <div class="col-md-6">
                                    <select name="visible" id="inputVisible" class="custom-select">
                                        <option value=""> Seleccione una Visibilidad </option>
                                        <option value="1"> Si </option>
                                        <option value="2"> No </option>
                                    </select>

                                    @if ($errors->has('visible'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('visible') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">Categoria</label>

                                <div class="col-md-6">

                                    <select  name="category_id" id="inputCategory_id" class="custom-select">
                                        <option value=""> Seleccione una Categoria </option>
                                        @foreach($categorias as $categorias)
                                            <option value=" {{$categorias['id']}} "> {{$categorias['name']}} </option>

                                        @endforeach

                                    </select >

                                    @if ($errors->has('category_id'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-light">
                                        <i class="fa fa-check" style="font-size:20px"></i>
                                        Crear Producto

                                    </button>
                                </div>
                            </div>
                            <hr>
                            <a href="javascript:history.back()" class="btn btn-block btn-dark"><i class="fa fa-arrow-left "></i>  Volver Atrás</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
