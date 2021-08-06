@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-10 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-warning">
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Empresa</td>
                        <td>Fono</td>
                        <td>Acción</td>
                    </tr>
                </thead>
                <tbody id="tbody-proveedores">

                </tbody>
            </table>
        </div>
    </div>
@endsection