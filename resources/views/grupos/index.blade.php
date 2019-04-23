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

        <script>

          $(document).ready(function() {
            
            $('#botao_deletar_{{$grupo->id}}').click(function(){

              // alert('bateu');

              const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success',
                  cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false,
              })

              swalWithBootstrapButtons.fire({
                title: 'Tem certeza?',
                text: "Todas as categorias vinculadas a esse grupo serão apagadas!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, deletar!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
                  swalWithBootstrapButtons.fire(
                    'Deletado!',
                    'Grupo deletado.',
                    'success'
                  )
                  $('#form_deletar').submit();
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === Swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'Seu grupo está salvo :)',
                    'error'
                  )
                }
              });
            });
          });


        </script>

          <tr>
            <td>{{$grupo->id}}</td>
            <td>{{$grupo->nome}}</td>

            <td>
              <a href="{{ route('grupos.editar', $grupo->id) }}" class='btn btn-light'><i class="fas fa-cog text-dark"></i></a>
              |
              <button class='btn bg-light' id='botao_deletar_{{$grupo->id}}'><i class="far fa-trash-alt text-dark"></i></button>
            </td>
          </tr>
          
        <form action="{{ route('grupos.deletar', $grupo->id) }}" method='delete' id=form_deletar> {{ csrf_field() }} </form>
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
