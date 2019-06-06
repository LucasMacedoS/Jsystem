{{ csrf_field() }}


<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-6 ">
        <label> Nome do grupo </label>
        <input type="text" name="nome" class="form-control" value="{{ isset($grupo) ? $grupo->nome : old('nome') }}">
    </div>

</div>
