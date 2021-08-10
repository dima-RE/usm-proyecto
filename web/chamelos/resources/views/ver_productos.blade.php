@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-10 mx-auto">
            <table id="table-productos" class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-warning">
                    <tr>
                        <td data-sort-method='none'>Codigo</td>
                        <td>Nombre</td>
                        <td>Categoría</td>
                        <td>Proveedor</td>
                        <td>Precio</td>
                        <td>Stock</td>
                        <td data-sort-method='none'>Acción</td>
                    </tr>
                </thead>
                <tbody id="tbody-productos">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/services/productoService.js')}}"></script>
    <script src="{{asset('js/services/proveedorService.js')}}"></script>
    <script src="{{asset('js/ver_productos.js')}}"></script>

    <script src="{{asset('vendor/tablesort-gh-pages/dist/tablesort.min.js')}}"></script>
@endsection