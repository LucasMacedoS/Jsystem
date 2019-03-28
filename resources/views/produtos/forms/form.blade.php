{{ csrf_field() }}

<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-4">

        <label> Nome do produto </label>
        <input type="text" name="nome" class="form-control">

    </div>
    <div class="form-group col-md-4">

        <label> Grupo </label>
        <select name="grupo_id" class="form-control">
            @foreach($grupos as $grupo)
                <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
            @endforeach
        </select>

    </div>
    <div class="form-group col-md-4">

        <label> Categoria </label>
        <select name="categoria_id" class="form-control">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>

    </div>

</div>
<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-4">

        <label> Manipulado </label>
        <select name="" class="form-control">
            <option value="Sim"> Sim </option>
            <option value="Não"> Não </option>
        </select>
    </div>
    <div class="form-group col-md-4">

        <label> Quantidade </label>
        <input type="number" name="Quantidade_produto" class="form-control">

    </div>
    <div class="form-group col-md-4">

        <label> Preço </label>
        <input type="text" name="Preço_produto" class="form-control">

    </div>

</div>
<div class="row col-md-12 justify-content-center">

    <div class="form-group">
        <a href="{{ route('produtos.index') }}" class="btn btn-danger">Cancelar</a>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </div>

</div>