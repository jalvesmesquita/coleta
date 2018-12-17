@extends('layouts.template')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Coletas</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <section class="panel">
        <header class="panel-heading">
            Coletas
            {{--<span class="tools pull-right">--}}
            <a href="{{ action("ColetaController@create") }}"><button type="button" class="btn btn-success" style="margin-left:88%"><i class="fa fa-plus"></i> Coleta</button></a>
            {{--</span>--}}
        </header>
        <div class="panel-body">

            <table class="table table-bordered" id="ajudantes-table">
                <thead>
                <tr>
                    <th>Motorista</th>
                    <th>Ajudante</th>
                    <th>Veiculo</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
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
                $('#ajudantes-table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('coletas.data') !!}',
                    columns: [
                        {data: 'motorista', name: 'motorista'},
                        {data: 'ajudante', name: 'ajudante'},
                        {data: 'veiculo', name: 'veiculo'},
                        {data: 'quantidade', name: 'quantidade'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
            });

            // var table = $('#users-table').DataTable();


        </script>

    @endpush


@endsection