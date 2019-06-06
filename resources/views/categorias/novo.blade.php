@extends('layouts.app')

@section('title', 'JSYS - Categorias')

@section('header', 'Categorias')

@section('content')

<form method="POST" action="{{route('categorias.salvar')}}">

    @include('categorias.forms.form')
    
    <br>

    <div class="row col-md-12 justify-content-center">

        <div class="form-group">
            <a href="{{ route('categorias.index') }}" class="btn btn-danger"> voltar </a>
            <input type="submit" value="Salvar" class="btn btn-primary">
        </div>

    </div>

</form>

@endsection
