@extends('layouts.template')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Ajudantes</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <section class="panel">
        <header class="panel-heading">
            Ajudantes
            {{--<span class="tools pull-right">--}}
            <a href="{{ action("AjudantesController@create") }}"><button type="button" class="btn btn-success" style="margin-left:88%"><i class="fa fa-plus"></i> Ajudante</button></a>
            {{--</span>--}}
        </header>
        <div class="panel-body">

            <table class="table table-bordered" id="ajudantes-table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>RG</th>
                    <th>CPF</th>
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
                    ajax: '{!! route('ajudantes.data') !!}',
                    columns: [
                        {data: 'nome', name: 'nome'},
                        {data: 'email', name: 'email'},
                        {data: 'rg', name: 'rg'},
                        {data: 'cpf', name: 'cpf'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
            });

            // var table = $('#users-table').DataTable();


        </script>

    @endpush


@endsection