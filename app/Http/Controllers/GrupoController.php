<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use App\Models\Categoria;

class GrupoController extends Controller
{

    // ============================
    // INICIO CRUD
    // ============================


    // Retorna todos os grupos cadastrados
    public function index()
    {
        $grupos = Grupo::all();

        return view('grupos.index')
            ->with('grupos', $grupos);
    }


    // Retorna o furmulário de cadastro de grupo
    public function novo()
    {
        return view('grupos.novo');
    }


    // Salva no banco de dados um grupo cadastrado
    public function salvar(Request $request)
    {
        $grupo = new Grupo;
        $grupo->fill($request->all());
        $grupo->save();

        return redirect()->back()->with('success', 'Grupo salvo com sucesso!');
    }


    public function show($id)
    {
        //
    }


    // Retorna o formulário de edição de grupo
    public function editar($id)
    {
        $grupo = Grupo::find($id);
        $categoria = Categoria::where('grupo_id', $grupo->id)->first();

        return view('grupos.editar')
            ->with('grupo', $grupo);
    }


    // Atualiza o cadastro de um grupo no banco de dados
    public function atualizar(Request $request, $id)
    {
        // dd($request);
        $grupo = Grupo::find($id);
        // dd($grupo);
        $grupo->fill($request->all());
        $grupo->save();

        return redirect()->back()->with('success', 'Grupo atualizado com sucesso!');
    }


    //Deleta um grupo do banco de dados
    public function excluir($id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();
        // dd($grupo);
        return redirect()->back()->with('success', 'Grupo excluido com sucesso!');
    }


    // ============================
    // FIM CRUD
    // ============================

}
