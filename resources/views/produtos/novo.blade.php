@extends('layout.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


<form method="POST" action="{{route('produtos.salvar')}}">

  {{ csrf_field() }}

  <div class="row form-group">
    <!-- NOME -->
    <div class="col-md-4">
      <label>Nome do produto</label>
      <input type="text" name="Nome_produto" class="form-control">
    </div>

    <!-- GRUPO -->
    <div class="col-md-4">
      <label for="inlineFormCustomSelect">Grupo</label>
      <br>
      <select name="Grupo_produto" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Escolher...</option>
        @foreach($grps as $grp)
            <option value="{{ $grp->id }}">{{ $grp->nome }}</option>
        @endforeach
      </select>
    </div>

    <!-- CATEGORIA -->
    <div class="col-md-4">
      <label for="inlineFormCustomSelect">Categoria</label>
      <br>
      <select name="Categoria_produto" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Escolher...</option>
        @foreach($cats as $cat)
            <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
        @endforeach
      </select>
      <br>
      <br>
      <br>
    </div>

    <!-- MANIPULADO -->
    <div class="col-md-4">
      <label>Manipulado (S - N)</label>
      <input type="text" name="Manipulado_produto" class="form-control">
    </div>	

    <!-- ESTOQUE -->
    <div class="col-md-4">
      <label>Quantidade</label>
      <input type="number" name="Quantidade_produto" class="form-control">
    </div>

    <!-- PREÇO -->
    <div class="col-md-4">
      <label>Preço</label>
      <input type="text" name="Preço_produto" class="form-control" id="preco">
    </div>

  </div>

  <div class="row form-group text-center">
    <div class="col-md-3 text-center">
      <input type="submit" value="Salvar" class="btn btn-sm btn-primary">
      <a href="/produtos" class="btn btn-sm btn-danger">Cancelar</a>
    </div>
  </div>

</form>



@endsection