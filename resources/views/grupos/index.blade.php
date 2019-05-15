@extends('layouts.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')



<div class="card">
  <div class="card-body">

    <a href="{{route('grupos.novo')}}" class="btn btn-info"> Novo grupo </a>

    <br>
    <br>

    <table class="table" id="table">
      <thead>
        <th> #ID </th>
        <th> Nome  </th>
        <th>  </th>
      </thead>
      <tbody>
        @forelse($grupos as $grupo)
        <tr>
          <td>{{$grupo->id}}</td>
          <td>{{$grupo->nome}}</td>

          <td>
            <a href="#editar_{{$grupo->id}}" data-toggle="modal"><i class="fas fa-cog text-dark"></i></a>
            |
            <a href="#excluir_{{$grupo->id}}" data-toggle="modal"><i class="far fa-trash-alt text-dark"></i></a>
          </td>
        </tr>

        <!-- Modal Editar -->
        <div class="modal fade" id="editar_{{$grupo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Editar Grupo </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form method="POST" action="{{ route('grupos.atualizar', $grupo->id) }}">

                  @include('grupos.forms.form')

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
                  <button type="submit" class="btn btn-success"> Salvar </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Modal Excluir -->
        <div class="modal fade" id="excluir_{{$grupo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Excluir Grupo </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form method="POST" action="{{ route('grupos.excluir', $grupo->id) }}">

                  {{ csrf_field() }}

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
                  <button type="submit" class="btn btn-primary"> Excluir </button>
                </div>
              </form>
            </div>
          </div>
        </div>

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
