@extends('layouts.master')
<!--
@section('css')
    <link rel="stylesheet" href="{{asset('vendor/sortable-0.8.0/css/sortable-theme-minimal.css')}}">
@endsection
-->
@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-10 mx-auto">
            <table id="table-empresas" class="table table-hover table-bordered table-striped table-responsive" data-sortable>
                <thead class="bg-warning">
                    <tr>
                        <td>R.U.T.</td>
                        <td data-sort-method='none'>Nombre</td>
                        <td data-sort-method='none'>Dirección</td>
                        <td data-sort-method='none'>Fono</td>
                        <td data-sort-method='none'>Email</td>
                        <td data-sort-method='none'>Acción</td>
                    </tr>
                </thead>
                <tbody id="tbody-empresas">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/services/empresaService.js')}}"></script>
    <script src="{{asset('js/ver_empresas.js')}}"></script>

    <!--
    <script src="{{asset('vendor/sortable-0.8.0/js/sortable.min.js')}}"></script>
    -->
    
    <script src="{{asset('vendor/tablesort-gh-pages/dist/tablesort.min.js')}}"></script>
    <script>
        new Tablesort(document.getElementById('table-empresas'));
    </script>

@endsection