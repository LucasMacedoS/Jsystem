@extends('layouts.app')

@section('title', 'JSYS - Pagamento Balcão')

@section('content')

    <script>

        $(document).ready(function () {

            $('#plus').click(function () {

                $('#itens').clone().appendTo('#teste');

            });

        });

    </script>



    <div class="card" >

        <div class="card-header text-center"> Pagamento de Balcão </div>

        <div class="card-body">

            <form method="POST" action="{{ route('caixa.balcao.pagamento') }}" >

            {{ csrf_field() }}

                <div id="itens">

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label> Item </label>
                            <select name="item_id[]" class="form-control" id="item" required>

                                @forelse($produtos as $produto)
                                    <option value=""> </option>

                                @empty
                                    <option> Nenhum registro </option>
                                @endforelse

                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label> Quantidade </label>
                            <input type="number" name="quantidade[]" class="form-control" required>

                        </div>

                        <div class="form-group col-md-2">
                            <label> Preço </label>
                            <input type="text" class="form-control"  disabled>

                        </div>

                        <div class="form-group col-md-1">
                            <br>

                            <button role="button" class="btn btn-white" id="plus"> <i class="fas fa-plus"></i> </button>

                        </div>

                    </div>

                </div>

                <div id="teste"></div>

                <br>

                <div class="row col-md-12 justify-content-center">

                    <button role="submit" class="btn btn-success"> Pagar </button>

                </div>

            </form>

        </div>

    </div>

@endsection
