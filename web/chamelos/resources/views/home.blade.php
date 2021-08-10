@extends('layouts.master')

@section('contenido')
    <div class="row mx-2">
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="card">
                <div class="card-header bg-danger bg-gradient h5 text-light text-center">
                    <span>Encabezado Boleta</span>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="txt-codigo" class="form-label">Codigo del Producto</label>
                        <input type="number" class="form-control" id="txt-codigo">
                    </div>

                    <div class="d-grid gap-1">
                        <button id="btn-buscar" type="button" class="btn btn-info">Buscar</button>
                    </div>

                    <div class="mb-3">
                        <label for="txt-nombre" class="form-label">Nombre del producto</label>
                        <input class="form-control-plaintext" id="txt-nombre" type="text" placeholder="Traer nombre" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="txt-cantidad" class="formlabel">Cantidad - Agregar el por defecto</label>
                        <input type="number" id="txt-cantidad" class="form-control">
                    </div>

                    <div class="card-footer d-grid gap-1">
                        <button id="btn-agregar" type="button" class="btn btn-info">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md col-lg mx-auto my-2">
            <div class="card">
                <div class="card-header text-center h5 bg-danger bg-gradient text-light">
                    <span>Lista Productos</span>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered table-striped">
                      <thead class="table-primary">
                        <tr>
                          <th>Código</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                          <th>Valor Unitario</th>
                          <th>Valor Total</th>
                          <th>Opción</th>
                        </tr>
                      </thead>
                      <tbody id="tbody-venta">
                        
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

    <script src="{{asset('js/services/productoService.js')}}"></script>
    <script src="{{asset('js/services/ventaService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>

@endsection