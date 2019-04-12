@extends('layouts.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


    <script>

            function deletar(id) {

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false,
                })

                swalWithBootstrapButtons.fire({
                    title: 'Tem certeza?',
                    text: "Você não podera reverter isso!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, deletar!',
                    cancelButtonText: 'Não, cancelar!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire(
                            'Deletado!',
                            'O produto foi deletado.',
                            'success'
                        );

                        $(document).ready(function () {

                        $.ajax({
                            type: "DELETE",
                            url: "",
                            data: id,
                            success: function(msg){
                                alert("Data Deleted: " + msg);
                            }
                        });

                        });
                    } else if (
                        // Read more about handling dismissals
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelado',
                            'Seu produto esta seguro :)',
                            'error'
                        )
                    }
                });
            }

    </script>

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
              <a href="{{ route('produtos.editar', $produto->id) }}"><i class="fas fa-cog" style="color: black;"></i></a>
              |
              <a href="#" onclick="(deletar({{$produto->id}}))"><i class="far fa-trash-alt" style="color: black;"></i></a>
            </td>
          </tr>

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
