{{ csrf_field() }}

<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-6">
        <label> Nome da categoria </label>
        <input type="text" name="nome" placeholder="Nome" class="form-control" value="{{ isset($categoria) ? $categoria->nome : old('nome') }}" required>
    </div>

</div>

<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-6">
        <label> Grupo </label>
        <select name="grupo_id" class="form-control" required>
            @if(isset($categoria))
                <option value="{{$categoria->grupo_id}}" selected hidden> {{$categoria->grupo->nome}} </option>
            @else
                <option selected disabled hidden> Grupo </option>
            @endif
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