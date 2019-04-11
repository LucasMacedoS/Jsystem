@extends('layouts.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


<form method="POST" action="{{ route('produtos.salvar') }}">

  @include('produtos.forms.form')

</form>



@endsection