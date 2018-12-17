@extends('layouts.login-template')

@section('titulo', 'Login Coleta')

@section('conteudo')
    <body class="login-body">

    <div class="container">

        <form class="form-signin" method="POST" action="{{ route('login') }}" >
            @csrf
            <h2 class="form-signin-heading">Login Coleta</h2>
            <div class="login-wrap">

                <input type="text" class="form-control" placeholder="Email" autofocus="" name="email">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red"><i class="fa fa-exclamation-circle"></i> {{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="password" class="form-control" placeholder="Senha" name="password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red"><i class="fa fa-exclamation-circle"></i> {{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <label class="checkbox">
                    <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Esqueceu a senha?</a>
                </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Entrar</button>
                <div class="registration">
                    Não possui conta?
                    <a class="" href="{{ route('register') }}">
                        Criar Conta
                    </a>
                </div>
            </div>
        </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    </body>

@endsection
