<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Grupo;


class CategoriaController extends Controller
{

    // ============================
    // INICIO CRUD
    // ============================


    // Retorna todos as categorias cadastradas
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index')
            ->with('categorias', $categorias);
    }


    // Retorna o formulário de cadastro de categoria
    public function novo()
    {
        $grupos = Grupo::all();

        return view('categorias.novo')
            ->with('grupos', $grupos);
    }


    // Salva no banco dedos uma categoria cadastrada
    public function salvar(Request $request)
    {
        $categoria = new Categoria;
        $categoria->fill($request->all());
        $categoria->save();

        return redirect()->back();
    }



    public function show($id)
    {
        //
    }


    // Retorna o fomulário para edição de categoria
    public function editar($id)
    {
        $categoria = Categoria::find($id);
        $grupos = Grupo::all();

        return view('categorias.editar')
            ->with('categorias', $categoria)
            ->with('grupos', $grupos);
    }


    // Atualiza um cadastro de categoria no banco de dados
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->fill($request->all());
        $categoria->save();

        return redirect()->back();
    }


    // Deleta uma categoria do banco de dados
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->back();
    }

    // ============================
    // FIM CRUD
    // ============================

}