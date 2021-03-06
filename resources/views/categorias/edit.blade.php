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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Categoria</div>

                    <div class="card-body">
                        {!! Form::open(['route'=>['categorias.update', $categorias], 'method' => 'PUT']) !!}
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $categorias->name }}" value="{{ old('name') }}" required autofocus>

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
                                    <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ $categorias->slug }}" value="{{ old('slug') }}" required autofocus>

                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Descripcion</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $categorias->description }}" value="{{ old('description') }}" required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="color" class="col-md-4 col-form-label text-md-right">Color</label>

                                <div class="col-md-6">
                                    <input id="color" type="color" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ $categorias->color }}" value="{{ old('color') }}" required autofocus>

                                    @if ($errors->has('color'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-light">
                                        <i class="fa fa-check" style="font-size:20px"></i>
                                        Crear Categoria

                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                        <hr>
                        <a href="javascript:history.back()" class="btn btn-block btn-dark"><i class="fa fa-arrow-left "></i>  Volver Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection


