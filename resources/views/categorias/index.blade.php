@extends('layouts.app')

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
              <a href="{{ route('categorias.editar', $categoria->id) }}"><i class="fas fa-cog"  style="color:black"></i></a>
              |
              <a href=""><i class="far fa-trash-alt" style="color:black"></i></a>
            </td>
          </tr>
        @empty
        <div class="container text-center">
          <div class="text-danger">
            Nenhuma categoria cadastrada.
          </div>
        </div>
        @endforelse
      </tbody>
    </table>

  </div>
</div>


@endsection
