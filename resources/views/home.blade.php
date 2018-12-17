@extends('layouts.template')

@section('conteudo')


    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ action('HomeController@index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li class="active"> Dashboard</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>
    <section class="panel">

        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol blue">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="value">
                        <h1>{{ count($usuarios) }}</h1>
                        <p>Usuarios</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol red">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="value">
                        <h1>{{ count($motoristas) }}</h1>
                        <p>Motoristas</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol blue">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="value">
                        <h1>{{ count($veiculos) }}</h1>
                        <p>Veiculos</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="card">
                    <div class="symbol red">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="value">
                        <h1>{{ count($coletas) }}</h1>
                        <p>Coletas</p>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection