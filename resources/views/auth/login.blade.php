@extends('layouts.auth')

@section('title', 'JSYS - Login')

@section('content')


<div class="login-box">

    <div class="login-logo">
<!--    <img src="{{ asset('img/logo.png') }}"  class="brand-image img-circle elevation-3"> -->
        <a href="{{ route('home') }}"><b>JSystem </b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body bg-dark-gradient">

            <form action="{{ route('login.entrar') }}" method="post">

              {{ csrf_field() }}

                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Senha">
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Lembrar
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-4 mx-auto">
                        <button type="submit" class="btn btn-block btn-flat"> Entrar </button>
                    </div>
                </div>
            </form>

            <br>

            <p class="mb-1">
                <a href="#" class="text-white"> <i class="fas fa-tired"></i> <b> Esqueci minha senha </b> </a>
            </p>
            <p class="mb-0">
                <a href="{{ route('registro.novo') }}" class="text-center text-white"> <i class="fas fa-user-plus"></i> <b> Registrar </b> </a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
  </div>

@endsection
