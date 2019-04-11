{{ csrf_field() }}


<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-6 ">
        <label> Nome do grupo </label>
        <input type="text" name="nome" class="form-control" value="{{  }}">
    </div>

</div>
<div class="row justify-content-center">

    <div class="form-group">
        <a href="{{ route('grupos.index') }}" class="btn btn-danger"> Voltar </a>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </div>

</div>