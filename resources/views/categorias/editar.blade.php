@extends('layouts.app')

@section('title', 'JSYS - Categorias')

@section('header', 'Categorias')

@section('content')


<form method="POST" action="{{ route('categorias.atualizar', $categoria->id) }}">

    @include('categorias.forms.form')

</form>


@endsection