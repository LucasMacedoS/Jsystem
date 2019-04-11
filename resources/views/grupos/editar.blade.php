@extends('layouts.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')

<form method="POST" action="{{ route('grupos.atualizar', $categoria->id) }}">

  @include('grupos.forms.form')

</form>

@endsection