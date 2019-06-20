<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Comanda;

class ComandaController extends Controller
{
    
    // ============================
    // INICIO CRUD
    // ============================


    // Retorna todas as comandas cadastradas
    public function index()
    {
        
        $comandas = Comanda::where('status', 1)->get();

        foreach ($comandas as $comanda){

            $pedidos = Pedido::where('comanda_id', $comanda->id)->count();

            $comanda['pedidos'] = $pedidos;

        }

//        dd($comandas);

        return view ('comanda.index')->with('comandas', $comandas);

    }



    // Retorna o formulário de cadastro de usuário
    public function novo()
    {

        //

    }


    // Salva no banco de dados um usuário cadastrado
    public function salvar(Request $request)
    {

        //

    }


    public function show($id)
    {
        //
    }


    // Retorna o formulário de edição de comada
    public function editar($id)
    {
        //
    }


    // Atualiza o cadastro de uma comada no banco de dados
    public function update(Request $request, $id)
    {
        //
    }


    // Deleta uma comada do banco de dados
    public function destroy($id)
    {
        //
    }

    // ============================
    // FIM CRUD
    // ============================

}
