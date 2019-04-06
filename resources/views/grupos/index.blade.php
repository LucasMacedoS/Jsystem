@extends('layout.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')



<div class="card">
  <div class="card-body">

    <a href="{{route('grupos.novo')}}" class="btn btn-info">Novo grupo</a>

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
              <a href="/grupos/editar/{{ $grupo->id }}"><i class="fas fa-cog"></i></a>
              <b>|</b>
              <a href="/grupos/deletar/{{ $grupo->id }}"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
        @empty
        @endforelse
      </tbody>
    </table>

  </div>
</div>


@endsection
