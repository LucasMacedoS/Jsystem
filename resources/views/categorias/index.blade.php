@extends('layouts.app')

@section('title', 'JSYS - Categorias')

@section('header', 'Categorias')

@section('content')

<script type="text/javascript">

$(document).ready(function(){

  $('#table').DataTable({
    "language": {
      "search": "Filtrar:",
      "show": "teste",
      "zeroRecords": "Nenhum registro encontrado",
      "lengthMenu":    "Mostrar _MENU_ Registros por pagina",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoFiltered": " - filtrado de _MAX_ registros",
      "paginate": {
        'first': "Inicio",
        'last': "Fim",
        'next': "Próxima",
        'previous': "Anterior",
      }
    }
  });

});

</script>

<div class="card">
  <div class="card-body">

    <a href="{{route('categorias.novo')}}" class="btn btn-info">Nova categoria</a>

    <br>
    <br>

    <table class="table" id="table">
      <thead>
        <th> #ID </th>
        <th> Categoria  </th>
        <th> Grupo </th>
        <th>  </th>
      </thead>
      <tbody>
        @forelse($categorias as $categoria)
        <tr>
          <td>{{$categoria->id}}</td>
          <td>{{$categoria->nome}}</td>
          <td>{{$categoria->grupo->nome}}</td>

          <td>
            <a href="#editar_{{$categoria->id}}" data-toggle="modal"><i class="fas fa-cog"  style="color:black"></i></a>
            |
            <a href="#excluir_{{$categoria->id}}" data-toggle="modal"><i class="far fa-trash-alt" style="color:black"></i></a>
          </td>
        </tr>

        <!-- Modal Editar -->
        <div class="modal fade" id="editar_{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Editar Categoria </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form method="POST" action="{{ route('categorias.atualizar', $categoria->id) }}" id='form'>

                  @include('categorias.forms.form')

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
        <div class="modal fade" id="excluir_{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Excluir Categoria </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form method="POST" action="{{ route('categorias.excluir', $categoria->id) }}">

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
            Nenhuma categoria cadastrada.
          </div>
        </div>
        @endforelse
      </tbody>
    </table>

  </div>
</div>


@endsection
