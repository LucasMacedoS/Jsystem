{{ csrf_field() }}

<div class="row col-md-12 justify-content-center">

    <div class="form-group col-md-6">
        <label> Nome da categoria </label>
        <input type="text" name="nome" placeholder="Nome" class="form-control" value="{{ isset($categoria) ? $categoria->nome : old('nome') }}" required>
    </div>



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
