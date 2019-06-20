@extends('layouts.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


<form method="POST" action="{{ route('produtos.atualizar', $produto->id) }}" id='form'>

  @include('produtos.forms.form')

  <div class="row col-md-12 justify-content-center">

    <button role="submit" class="btn btn-success"> Enviar </button>

  </div>

</form>


@endsection