@extends('layouts.app')

@section('title', 'JSYS - Comandas')

@section('header', 'Comandas')

@section('content')



    <div class="container-fluid">
        <div class="row">

            @forelse($comandas as $coanda)

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>R$ 15,00</h3>

                            <p> COMANDA 001 </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                        <a href="#" class="small-box-footer"> DETALHES <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            @empty

                Sem comandas ativas

            @endforelse
        </div>

        <br>





        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>R$ 00,00</h3>

                            <p> COMANDA 005 </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                        <a href="#" class="small-box-footer"> DISPONIVEL <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>


            <br>

            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>R$ 00,00</h3>

                                <p> COMANDA 005 </p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-receipt"></i>
                            </div>
                            <a href="#" class="small-box-footer"> DISPONIVEL <i class="fa fa-arrow-circle-right"></i></a>
                        </div>

                    </div>

                </div>


@endsection