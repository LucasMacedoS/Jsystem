@extends('layouts.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


<form method="POST" action="{{ route('produtos.salvar') }}" id='form'>

  @include('produtos.forms.form')

  <br>

  <div class="row col-md-12 justify-content-center">

      <div class="form-group">
          <a href="{{ route('produtos.index') }}" class="btn btn-danger">Cancelar</a>
          <input type="submit" value="Salvar" class="btn btn-primary">
      </div>

  </div>

</form>



@endsection
