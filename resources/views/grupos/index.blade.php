@extends('layouts.app')

@section('title', 'JSYS - Grupos')

@section('header', 'Grupos')

@section('content')


<script>

  $(document).ready(function() {
    
    $('#botao_deletar').click(function(){

      alert('bateu');

      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false,
      })

      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
          $('#form_deletar').submit();
        } else if (
          // Read more about handling dismissals
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          )
        }
      });

    });
  

  });


</script>


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
              <a href="{{ route('grupos.editar', $grupo->id) }}"><i class="fas fa-cog text-dark"></i></a>
              |
              <button class='btn bg-light' id='botao_deletar'><i class="far fa-trash-alt text-dark"></i></button>
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
