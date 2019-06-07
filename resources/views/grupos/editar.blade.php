@extends('layouts.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')

<form method="POST" action="{{ route('grupos.atualizar', $grupo->id) }}">

  @include('grupos.forms.form')

</form>

@endsection