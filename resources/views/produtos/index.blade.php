@extends('layout.app')

@section('title', 'JSYS - Produtos')

@section('header', 'Produtos')

@section('content')


<div class="card">
  <div class="card-body">

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
            <td>  </td>
            <td>  </td>
            <td>  </td>
            <td>  </td>
            <td>  </td>
            <td>  </td>
            <td>  </td>
          </tr>
        @empty
        @endforelse
        <tr>
          <td> 1 </td>
          <td> Skol </td>
          <td> Cerveja </td>
          <td> Latas </td>
          <td> Não </td>
          <td> 100 </td>
          <td> R$ 3,50 </td>
        </tr>
      </tbody>
    </table>

  </div>
</div>


@endsection
