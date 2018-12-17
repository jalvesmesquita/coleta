@extends('layouts.template')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Motoristas</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <section class="panel">
        <header class="panel-heading">
            Motoristas
            {{--<span class="tools pull-right">--}}
            <a href="{{ action("MotoristasController@create") }}"><button type="button" class="btn btn-success" style="margin-left:88%"><i class="fa fa-plus"></i> Motorista</button></a>
             {{--</span>--}}
        </header>
        <div class="panel-body">

            <table class="table table-bordered" id="motoristas-table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>CNH</th>
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
                $('#motoristas-table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('motoristas.data') !!}',
                    columns: [
                        {data: 'nome', name: 'nome'},
                        {data: 'email', name: 'email'},
                        {data: 'telefone', name: 'telefone'},
                        {data: 'cnh', name: 'cnh'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
            });

            // var table = $('#users-table').DataTable();

        </script>

    @endpush

@endsection