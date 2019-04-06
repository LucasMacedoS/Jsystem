@extends('layout.app')

@section('title', 'JSYS - Categorias')

@section('header', 'Categorias')

@section('content')


<div class="card">
  <div class="card-body">

    <a href="{{route('categorias.novo')}}" class="btn btn-info">Nova categoria</a>

    <table class="table" id="myTable">
      <thead>
        <th> #ID </th>
        <th> Categoria  </th>
        <th> Grupo </th>
      </thead>
      <tbody>
        @forelse($categorias as $categoria)
          <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nome}}</td>
            <td>{{$categoria->grupo->nome}}</td>
            
            <td>
              <a href="/categorias/editar/{{ $categoria->id }}"><i class="fas fa-cog"></i></a>
              <b>|</b>
              <a href="/categorias/deletar/{{ $categoria->id }}"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
        @empty
        @endforelse
      </tbody>
    </table>

  </div>
</div>


@endsection