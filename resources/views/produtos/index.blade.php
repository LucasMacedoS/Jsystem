@extends('layouts.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


<script>

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

    <a href="{{route('produtos.novo')}}" class="btn btn-info">Novo produto</a>

    <br>
    <br>

    <table class="table" id="table">
      <thead class="text-center">
        <th> #ID </th>
        <th> Nome  </th>
        <th> Categoria </th>
        <th> Grupo </th>
        <th> Manipulado </th>
        <th> Estoque </th>
        <th> Valor Unitário </th>
        <th> Ações </th>
      </thead>
      <tbody class="text-center">
        @forelse($produtos as $produto)
        <tr>
          <td>{{$produto->id}}</td>
          <td>{{$produto->nome}}</td>
          <td>{{$produto->categoria->nome}}</td>
          <td>{{$produto->grupo->nome}}</td>
          <td>{{$produto->manipulado()}}</td>
          <td>{{$produto->estoque}}</td>
          <td>{{ "R$ ".number_format($produto->valor_unitario, 2, ',', '.') }}</td>

          <td>
            <a href="{{ route('produtos.editar', $produto->id) }}"><i class="fas fa-cog" style="color: black;"></i></a>
            |
            <a href="#excluir_{{$produto->id}}" data-toggle="modal"><i class="far fa-trash-alt" style="color: black;"></i></a>
          </td>
        </tr>

        <!-- Modal Editar -->
        <div class="modal fade" id="editar_{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Editar Produto </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form method="POST" action="{{ route('produtos.atualizar', $produto->id) }}" id='form'>

                  @include('produtos.forms.form')

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
        <div class="modal fade" id="excluir_{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Excluir Produto </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form method="POST" action="{{ route('produtos.excluir', $produto->id) }}">

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
            Nenhum produto cadastrado.
          </div>
        </div>
        @endforelse
      </tbody>
    </table>

  </div>
</div>


@endsection
