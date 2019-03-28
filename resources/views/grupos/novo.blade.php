@extends('layout.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')

<form method="POST" action="{{ route('grupos.salvar') }}">

  @include('grupos.forms.form')

</form>

@endsection