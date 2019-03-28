{{ csrf_field() }}

<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-6">
        <label> Nome da categoria </label>
        <input type="text" name="Nome_categoria" class="form-control" value="">
    </div>

</div>

<!-- GRUPO -->
<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-6">
        <label> Grupo </label>
        <select name="grupo_id" class="form-control" >
            <option selected>Escolher...</option>
            @foreach($grupos as $grupo)
                <option value="{{ $grupo->id }}"> {{ $grupo->nome }} </option>
            @endforeach
        </select>
    </div>

</div>

<br>

<div class="row col-md-12 justify-content-center">

    <div class="form-group">
        <a href="{{ route('categorias.index') }}" class="btn btn-danger"> voltar </a>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </div>

</div>