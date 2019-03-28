@extends('layout.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')

<form method="POST" action="/grupos/{{ $grp->id }}">

  {{ csrf_field() }}
  
  <div class="row form-group">
    <div class="col-md-4">
      <label>Nome do grupo</label>
      <input type="text" name="Nome_grupo" class="form-control" value="{{ $grp->nome }}">
    </div>
  </div>
  
  <div class="row form-group text-center">
    <div class="col-md-3 text-center">
      <input type="submit" value="Salvar" class="btn btn-sm btn-primary">
      <a href="/grupos" class="btn btn-sm btn-danger">Cancelar</a>
    </div>
  </div>


</form>

@endsection