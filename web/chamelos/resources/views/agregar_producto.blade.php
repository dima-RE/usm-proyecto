@extends('layouts.master')

@section('contenido')

    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-danger bg-gradient h5 text-light text-center">
                    <span>Agregar un Producto</span>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="txt-codigo" class="form-label">Codigo del Producto</label>
                        <input type="number" class="form-control" id="txt-codigo">
                    </div>

                    <div class="mb-3">
                        <label for="txt-nombre" class="form-label">Nombre del producto</label>
                        <input class="form-control" id="txt-nombre" type="text">
                    </div>

                    <div class="mb-3">
                        <label for="select-categoría" class="formlabel">Categoría</label>
                        <select id="select-categoría" class="form-select">
                            
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-proveedor" class="form-label">Proveedor</label>
                        <select id="select-proveedor" class="form-select">
                            
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="txt-precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="txt-precio">
                    </div>

                    <div class="mb-3">
                        <label for="txt-stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="txt-stock">
                    </div>

                    <div class="mb-3">
                        <label for="txt-critico" class="form-label">Stock Crítico</label>
                        <input type="number" class="form-control" id="txt-critico">
                    </div>

                    <div class="card-footer d-grid gap-1">
                        <button id="btn-agregar" type="button" class="btn btn-info">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection