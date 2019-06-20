@extends('layouts.app')

@section('title', 'JSYS - Funcionários')

@section('header', 'Funcionários')

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

    <!-- <a href="" class="btn btn-info"> novo funcionário </a>

    <br>
    <br> -->

    <table class="table" id="table">
      <thead class="text-center">
        <th> #ID </th>
        <th> Nome  </th>
        <th> E-mail </th>
        <th> Perfil </th>
        <th> Status </th>
      </thead>
      <tbody class="text-center">
        @forelse($funcionarios as $funcionario)
        <tr>
          <td>{{$funcionario->id}}</td>
          <td>{{$funcionario->nome}}</td>
          <td>{{$funcionario->email}}</td>
          <td>{{$funcionario->perfil}}</td>
          <td>{{$funcionario->status()}}</td>
        </tr>

        @empty
        <div class="container text-center">
          <div class="text-danger">
            Nenhum funcionario cadastrado.
          </div>
        </div>
        @endforelse
      </tbody>
    </table>

  </div>
</div>


@endsection
