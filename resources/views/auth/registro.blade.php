@extends('layouts.auth')

@section('title', 'JSYS - Registrar')

@section('content')

<div class="register-box">
  <div class="register-logo">
    <a href="{{ route('home') }}"><b> JSystem </b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body bg-dark-gradient">
      <p class="login-box-msg"> Novo usuário </p>

      <form action="{{ route('registro.salvar') }}" method="post">

        {{ csrf_field() }}

        <div class="input-group mb-3">
          <input type="text" name="nome" class="form-control" placeholder="Nome Completo">
          <div class="input-group-append">
              <span class="fa fa-user input-group-text"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_validar" class="form-control" placeholder="Digite a senha novamente">
          <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
          </div>
        </div>
        <div class="row">

          <div class="col-4 mx-auto">
            <button type="submit" class="btn  btn-block btn-flat"> Enviar </button>
          </div>

        </div>

      </form>
      <br>
      <a href="{{ route('login') }}" class="text-center text-white"> <i class="fas fa-grimace"></i> Já possuo uma conta </a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

@endsection
