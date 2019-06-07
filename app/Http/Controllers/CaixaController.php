<?php

namespace App\Http\Controllers;

use App\Models\BalancoCaixa;
use App\Models\Comanda;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;

class CaixaController extends Controller
{

    public function index(){

        $caixas = BalancoCaixa::all();

        return view('caixa.caixa')
            ->with('caixas', $caixas);
    }



    public function balcao(){

        $produtos = Produto::all();

        return view('caixa.balcao')
            ->with('produtos', $produtos);
    }

    public function comanda(Request $request){

        $pedidos = Pedido::where('comanda_id', $request->comanda_id)->get();
        $comanda = $request->comanda_id;

        return view('caixa.comanda')
            ->with('pedidos', $pedidos)
            ->with('comanda', $comanda);
    }

    public function comanda_pagamento(Request $request){

        $venda = new Venda;
        $venda->fill([
            'comanda_id' => $request->comanda_id,
            'tipo_pagamento' => $request->tipo_pagamento,
            'total_venda' => $request->total_venda,
        ]);
        $venda->save();

        $balanco = new BalancoCaixa;
        $balanco->fill([
           'venda_id' => $venda->id,
           'tipo' => 'Entrada_comanda',
           'valor' => $venda->total_venda,
        ]);

        $comanda = Comanda::find($request->comanda_id);
        $comanda->status = 0;
        $comanda->save();

        return redirect()->back()->with('success', 'Pagamento realizado com sucesso!');
    }

    public function sangria(Request $request){

        $sangria = new BalancoCaixa;
        $sangria->fill([
           'tipo' => 'Sangria',
           'valor' => $request->sangria
        ]);
        $sangria->save();

        return redirect()->back()->with('success', 'Valor retirado do caixa!');
    }

    public function suplemento(Request $request){

        $suplemento = new BalancoCaixa;
        $suplemento->fill([
           'tipo' => 'Suplemento',
           'valor' => $request->suplemento
        ]);
        $suplemento->save();

        return redirect()->back()->with('success', 'Valor adicionado ao caixa!');
    }
}
