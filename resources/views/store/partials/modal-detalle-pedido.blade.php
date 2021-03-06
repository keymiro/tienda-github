<!-- Modal -->

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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Detalle del Pedido: </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="container text-center">
            <div class="modal-body imgvista">
            <div>
                <div class="table-responsive ">
                    <table   class="table table-stripped table-hover" id="table-detalle-pedido">
                        <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
            </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endif
