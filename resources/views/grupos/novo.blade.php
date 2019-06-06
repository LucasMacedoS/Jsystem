@extends('layouts.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')

<form method="POST" action="{{ route('grupos.salvar') }}">

  @include('grupos.forms.form')

  <br>

  <div class="row justify-content-center">

      <div class="form-group">
          <a href="{{ route('grupos.index') }}" class="btn btn-danger"> Voltar </a>
          <input type="submit" value="Salvar" class="btn btn-primary">
      </div>

  </div>

</form>

@endsection
