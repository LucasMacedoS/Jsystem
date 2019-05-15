{{ csrf_field() }}

<script>

    $(document).ready(function () {

        $('#quantidade').mask('0000000');
        $("#preco").maskMoney({
            prefix: "R$ ",
            decimal: ",",
            thousands: "."
        });

        $("#form").submit(function() {
            var preco = $('#preco').maskMoney('unmasked')[0];
            $('#preco').val(preco);
        });
    });

</script>


<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-4">

        <label> Nome do produto </label>
        <input type="text" name="nome" placeholder="Nome" class="form-control" value="{{ isset($produto) ? $produto->nome : old('nome') }}" required>

    </div>
    <div class="form-group col-md-4">

        <label> Grupo </label>
        <select name="grupo_id" class="form-control" required>
            @if(isset($produto))
                <option value="{{ $produto->grupo_id }}" selected hidden> {{ $produto->grupo->nome }} </option>
            @else
                <option selected disabled hidden> Grupo </option>
            @endif
            @foreach($grupos as $grupo)
                <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
            @endforeach
        </select>

    </div>
    <div class="form-group col-md-4">

        <label> Categoria </label>
        <select name="categoria_id" class="form-control" required>
            @if(isset($produto))
                <option value="{{ $produto->categoria_id }}" selected hidden> {{ $produto->categoria->nome }} </option>
            @else
                <option selected disabled hidden> Categoria </option>
            @endif
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>

    </div>

</div>
<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-4">

        <label> Manipulado </label>
        <select name="manipulado" class="form-control" required>
            @if(isset($produto))
                <option value="{{ $produto->manipulado }}" selected hidden> {{ $produto->manipulado }} </option>
            @else
                <option selected disabled hidden> Manipulado </option>
            @endif
            <option value="Sim"> Sim </option>
            <option value="Não"> Não </option>
        </select>
    </div>
    <div class="form-group col-md-4">

        <label> Quantidade </label>
        <input type="text" name="estoque" placeholder="00" class="form-control" id="quantidade" value="{{ isset($produto) ? $produto->estoque : old('estoque') }}" required>

    </div>
    <div class="form-group col-md-4">

        <label> Preço </label>
        <input type="text" name="valor_unitario" placeholder="R$ 0,00" class="form-control" id="preco" value="{{ isset($produto) ? $produto->valor_unitario : old('valor_unitario') }}" required>

    </div>

</div>
