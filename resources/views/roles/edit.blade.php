@extends('store.template')
@section('content')

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
        <br>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Editar Rol</div>

                        <div class="card-body">
                        {!! Form::open(['route'=>['roles.update', $roles], 'method' => 'PUT']) !!}
                        <!-- <form  action="{{ ('roles.update'. $roles) }}" method="PATCH"> -->
                            @csrf

                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombres</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text"
                                           class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                                           name="nombre" value="{{ $roles->nombre }}" value="{{ old('nombre') }}"
                                           required autofocus>

                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descripcion"
                                       class="col-md-4 col-form-label text-md-right">Descripcion</label>

                                <div class="col-md-6">
                                    <input id="descripcion" type="text"
                                           class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}"
                                           name="descripcion" value="{{ $roles->descripcion }}"
                                           value="{{ old('descripcion') }}" required autofocus>

                                    @if ($errors->has('descripcion'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-light"
                                            onclick="return confirm('¿Editar Rol?')">
                                        <i class="fa fa-check" style="font-size:20px"></i>
                                        Editar Rol
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <a href="javascript:history.back()" class="btn btn-block btn-dark"><i
                                        class="fa fa-arrow-circle-left "></i> Volver Atrás</a>
                            <!-- </form> -->

                            {!! Form::close() !!}
                        </div>

                    </div>


                    <br>
                    <br>
                </div>
            </div>
        </div>
    @endif
@endsection
