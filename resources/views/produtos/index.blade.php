@extends('layout.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


<div class="card">
  <div class="card-body">

    <a href="{{route('produtos.novo')}}" class="btn btn-info">Novo produto</a>

    <table class="table" id="table">
      <thead>
        <th> #ID </th>
        <th> Nome  </th>
        <th> Categoria </th>
        <th> Grupo </th>
        <th> Manipulado </th>
        <th> Estoque </th>
        <th> Valor Unitário </th>
      </thead>
      <tbody>
        @forelse($produtos as $produto)
          <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->categoria->nome}}</td>
            <td>{{$produto->grupo->nome}}</td>
            <td>{{$produto->manipulado}}</td>
            <td>{{$produto->estoque}}</td>
            <td>R$ {{$produto->valor_unitario}}</td>

            <td>
              <a href="/produtos/editar/{{ $produto->id }}"><i class="fas fa-cog"></i></a>
              <b>|</b>
              <a href="/produtos/deletar/{{ $produto->id }}"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
        @empty
        @endforelse
      </tbody>
    </table>

  </div>
</div>


@endsection
