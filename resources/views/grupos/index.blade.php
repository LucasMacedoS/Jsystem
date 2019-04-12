@extends('layouts.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')



<div class="card">
  <div class="card-body">

    <a href="{{route('grupos.novo')}}" class="btn btn-info"> Novo grupo </a>

    <table class="table" id="myTable">
      <thead>
        <th> #ID </th>
        <th> Nome  </th>
      </thead>
      <tbody>
        @forelse($grupos as $grupo)
          <tr>
            <td>{{$grupo->id}}</td>
            <td>{{$grupo->nome}}</td>

            <td>
              <a href="{{ route('grupos.editar', $grupo->id) }}"><i class="fas fa-cog" style="color: black;"></i></a>
              |
              <a href=""><i class="far fa-trash-alt" style="color: black;"></i></a>
            </td>
          </tr>
        @empty
        <div class="container text-center">
          <div class="text-danger">
            Nenhum grupo cadastrado.
          </div>
        </div>
        @endforelse
      </tbody>
    </table>

  </div>
</div>


@endsection
