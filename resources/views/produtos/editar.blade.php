@extends('layouts.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


<form method="POST" action="{{ route('produtos.atualizar', $produto->id) }}" id='form'>

  @include('produtos.forms.form')

</form>


@endsection