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

    public function balcao_pagamento(Request $request){

        dd($request);

        return view('caixa.balcao');
    }

    public function comanda(Request $request){

//        dd($request);

        $pedidos = Pedido::where('comanda_id', $request->comanda_id)->get();
        $comanda = Comanda::find($request->comanda_id);

//        dd($comanda);

        if($comanda == null){

            return redirect()->back()->with('error', 'Comanda não encontrada');
        }

        if($comanda->status == 1){

            return view('caixa.comanda')
                ->with('pedidos', $pedidos)
                ->with('comanda', $comanda);

        }else{

            return redirect()->back()->with('error', 'Comanda inativa');
        }
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
            'tipo' => 'Entrada',
            'valor' => $venda->total_venda,
        ]);
        $balanco->save();

        $comanda = Comanda::find($request->comanda_id);
        $comanda->status = 0;
        $comanda->save();

        return redirect()->route('home')->with('success', 'Pagamento realizado com sucesso!');
    }

    public function comanda_pagamento_parcial(Request $request){

//        dd($request);

        $venda = new Venda;
        $venda->fill([
            'comanda_id' => $request->comanda_id,
            'tipo_pagamento' => $request->tipo_pagamento,
            'total_venda' => $request->pagamento_parcial,
        ]);
        $venda->save();

        $balanco = new BalancoCaixa;
        $balanco->fill([
            'venda_id' => $venda->id,
            'tipo' => 'Entrada',
            'valor' => $venda->total_venda,
        ]);
        $balanco->save();

        $comanda = Comanda::find($request->comanda_id);

        $desconto = $comanda->desconto;
        $desconto += $request->pagamento_parcial;

        $comanda->desconto = $desconto;
        $comanda->save();

        return redirect()->route('home')->with('success', 'Pagamento realizado com sucesso!');

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
