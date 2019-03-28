<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Grupo;

class ProdutoController extends Controller
{

    // ============================
    // INICIO CRUD
    // ============================


    // Retorna todos os produtos cadastrados
    public function index()
    {

        $produtos = Produto::all();

        return view('produtos.index')
            ->with('produtos', $produtos);
    }


    // Retorna o fomulário de cadastro de produtos
    public function novo()
    {
        $grupos = Grupo::all();
        $categorias = Categoria::all();
        return view('produtos.novo')
            ->with('categorias', $categorias)
            ->with('grupos', $grupos);
    }


    // Salva no banco de dados um produto cadastrado
    public function salvar(Request $request)
    {
        $produto = new Produto;
        $produto->fill($request->all());
        $produto->save();

        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    // Retorna o formulário de edição de produto
    public function editar($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();
        $grupos = Grupo::all();

        return view('produto.editar')
            ->with('produto', $produto)
            ->with('categorias', $categorias)
            ->with('grupos', $grupos);

    }


    // Atualiza o cadastro de um produto no banco de dados
    public function atualizar(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->fill($request->all());
        $produto->save();
        return redirect()->back();
    }


    //Deleta um produto do bando de dados
    public function deletar($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->back();
    }


    // ============================
    // FIM CRUD
    // ============================
}