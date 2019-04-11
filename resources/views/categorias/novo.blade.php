@extends('layouts.app')

@section('title', 'JSYS - Categorias')

@section('header', 'Categorias')

@section('content')

<form method="POST" action="{{route('categorias.salvar')}}">

    @include('categorias.forms.form')


</form>

@endsection