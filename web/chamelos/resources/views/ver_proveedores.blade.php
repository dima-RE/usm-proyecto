@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-10 mx-auto">
            <table id="table-proveedores" class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-warning">
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Empresa</td>
                        <td data-sort-method='none'>Fono</td>
                        <td data-sort-method='none'>Acción</td>
                    </tr>
                </thead>
                <tbody id="tbody-proveedores">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/services/proveedorService.js')}}"></script>
    <script src="{{asset('js/services/empresaService.js')}}"></script>
    <script src="{{asset('js/ver_proveedores.js')}}"></script>

    <script src="{{asset('vendor/tablesort-gh-pages/dist/tablesort.min.js')}}"></script>
@endsection