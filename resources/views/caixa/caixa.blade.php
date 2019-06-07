@extends('layouts.app')

@section('title', 'JSYS - Caixa')

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

        });

    </script>


    <div class="card">

        <div class="card-header text-center"> Balanço de Caixa </div>

        <div class="card-body">

            <table class="table col-md-12" id="table">
                <thead>
                <tr class="text-center">
                    <td> Tipo </td>
                    <td> Valor </td>
                </tr>
                </thead>
                <tbody>

                @forelse($caixas as $caixa)

                    <tr class="text-center">
                        <td> {{ $caixa->tipo }} </td>
                        @if($caixa->tipo == 'Sangria')
                            <td> - R$ {{ $caixa->valor }} </td>
                        @else
                            <td> + R$ {{ $caixa->valor }} </td>
                        @endif
                    </tr>

                @empty
                @endforelse
                </tbody>

            </table>

        </div>

    </div>



@endsection
