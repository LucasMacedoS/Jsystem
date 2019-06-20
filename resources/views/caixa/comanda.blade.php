@extends('layouts.app')

@section('title', 'JSYS - Pagamento Comanda')

@section('content')


    <script>

        $(document).ready(function(){

            $('#table').DataTable({
                "paging": false,
                "language": {
                    "search": "Filtrar:",
                    "info": "",
                    "infoFiltered": "",
                }
            });

            $('#pagamento_parcial').maskMoney({
                prefix: "R$ ",
                decimal: ",",
                thousands: ".",
            });

        });

    </script>


    <div class="card">

        <div class="card-header text-center"> Pagamento de Comanda </div>

        <div class="card-body">

            <div class="row col-md-12 justify-content-end">

                <a href="#pagamento_parcial" class="btn btn-dark" data-toggle="modal"> Pagamento Parcial </a>

            </div>

            <br>

            <table class="table col-md-12" id="table">
                <thead>
                <tr class="text-center">
                    <td> Item </td>
                    <td> Quantidade </td>
                    <td> Preço </td>
                    <td> Total </td>
                </tr>
                </thead>
                <tbody>

                <?php $total = 0 ?>

                @forelse($pedidos as $pedido)

                    <tr class="text-center">
                        <td> {{ $pedido->produto->nome }} </td>
                        <td> {{ $pedido->quantidade }} </td>
                        <td> {{ "R$ ".number_format($pedido->produto->valor_unitario, 2, ',', '.' )}} </td>
                        <td> {{ "R$ ".number_format($pedido->quantidade *  $pedido->produto->valor_unitario, 2, ',', '.' )}} </td>
                    </tr>

                    <?php $total += $pedido->quantidade * $pedido->produto->valor_unitario ?>

                @empty
                @endforelse
                </tbody>

            </table>

            @if(isset($comanda->desconto))
                <div class="row col-md-12 justify-content-end">

                    Desconto: {{ "R$ ".number_format($comanda->desconto, 2, ',', '.')}}

                </div>
            @endif
            <div class="row col-md-12 justify-content-center">

                <a href="#pagamento" class="btn btn-success" data-toggle="modal"> Pagar </a>

            </div>

        </div>

    </div>

    <!-- Modal Pagamento -->
    <div class="modal fade" id="pagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"> Consumo em Comanda </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form action="{{ route('caixa.comanda.pagamento') }}" method="post">

                        {{ csrf_field() }}

                        <input type="hidden" name="comanda_id" value="{{ $comanda->id }}">
                        <input type="hidden" name="total_venda" value="{{ $total }}">


                        <div class="row">

                            @if(isset($comanda->desconto))
                                <div class="form-group col-md-6">
                                    <label> Total </label>
                                    <input type="text" class="form-control" value="{{ "R$ ".number_format($total - $comanda->desconto, 2, ',','.')}}" disabled>
                                </div>
                            @else
                                <div class="form-group col-md-6">
                                    <label> Total </label>
                                    <input type="text" class="form-control" value="R$ {{ $total }}" disabled>
                                </div>
                            @endif

                            <div class="form-group col-md-6">
                                <label> Forma de Pagamento </label>
                                <select name="tipo_pagamento" class="form-control" id="">
                                    <option value="Dinheoro"> Dinheiro </option>
                                    <option value="Debito"> Débito </option>
                                    <option value="Credito"> Crédito </option>
                                </select>

                            </div>


                        </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>

                    <button type="submit" class="btn btn-success"> Receber </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Pagamento Parcial -->
    <div class="modal fade" id="pagamento_parcial" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"> Consumo Parcial </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form action="{{ route('caixa.comanda.pagamento.parcial') }}" method="post">

                        {{ csrf_field() }}

                        <input type="hidden" name="comanda_id" value="{{ $comanda->id }}">


                        <div class="row">


                            <div class="form-group col-md-6">
                                <label> Total </label>
                                <input type="number" name="pagamento_parcial" class="form-control"  id="pagamento_parcial" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label> Forma de Pagamento </label>
                                <select name="tipo_pagamento" class="form-control" id="">
                                    <option value="Dinheoro"> Dinheiro </option>
                                    <option value="Debito"> Débito </option>
                                    <option value="Credito"> Crédito </option>
                                </select>

                            </div>


                        </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
                    <button type="submit" class="btn btn-success"> Receber </button>
                </div>
                </form>
            </div>
        </div>
    </div>


@endsection
