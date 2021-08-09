@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-10 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-warning">
                    <tr>
                        <td>R.U.T.</td>
                        <td>Nombre</td>
                        <td>Dirección</td>
                        <td>Fono</td>
                        <td>Email</td>
                        <td>Acción</td>
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
@endsection