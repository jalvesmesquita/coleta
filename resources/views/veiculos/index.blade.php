@extends('layouts.template')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Veiculos</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <section class="panel">
        <header class="panel-heading">
            Veiculos
            {{--<span class="tools pull-right">--}}
            <a href="{{ action("VeiculosController@create") }}"><button type="button" class="btn btn-success" style="margin-left:88%"><i class="fa fa-plus"></i> Veiculo</button></a>
            {{--</span>--}}
        </header>
        <div class="panel-body">

            <table class="table table-bordered" id="veiculos-table">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Cubagem</th>
                    <th>Placa</th>
                    <th>Açãoi</th>
                </tr>
                </thead>
            </table>

        </div>
    </section>


    @push('scripts')

        <script>

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function () {
                $('#veiculos-table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('veiculos.data') !!}',
                    columns: [
                        {data: 'tipo', name: 'tipo'},
                        {data: 'cubagem', name: 'cubagem'},
                        {data: 'placa', name: 'placa'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
            });

            // var table = $('#users-table').DataTable();


        </script>

    @endpush


@endsection