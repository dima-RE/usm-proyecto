@extends('layouts.master')

@section('contenido')

    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-danger bg-gradient h5 text-light text-center">
                    <span>Agregar un Proveedor</span>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="txt-codigo" class="form-label">Código</label>
                        <input type="text" class="form-control" id="txt-codigo">
                    </div>

                    <div class="mb-3">
                        <label for="txt-nombre" class="form-label">Nombre</label>
                        <input class="form-control" id="txt-nombre" type="text">
                    </div>

                    <div class="mb-3">
                        <label for="select-empresa" class="formlabel">Empresa</label>
                        <select id="select-empresa" class="form-select">
                            
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="txt-fono" class="form-label">Fono</label>
                        <input type="number" class="form-control" id="txt-fono" placeholder="+56912345678">
                    </div>

                    <div class="card-footer d-grid gap-1">
                        <button id="btn-agregar" type="button" class="btn btn-info">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    
    <script src="{{asset('js/services/proveedorService.js')}}"></script>
    <script src="{{asset('js/services/empresaService.js')}}"></script>
    <script src="{{asset('js/agregar_proveedor.js')}}"></script>

@endsection