<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

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
        $grp = Grupo::find($id);
        if(isset($grp)){
            return view('grupos.edit', compact('grp'));
        }else{
            return redirect('/grupos');
        }
        return view('grupos.editar');
    }


    // Atualiza o cadastro de um grupo no banco de dados
    public function atualizar(Request $request, $id)
    {
        $grp = Grupo::find($id);
        if(isset($grp)){
            $grp->nome = $request->input('Nome_grupo');
            $grp->save();
        }
        return redirect()->back()->with('success', 'Grupo atualizado com sucesso!');
    }


    //Deleta um grupo do banco de dados
    public function destroy($id)
    {
        $grupo = Grupo::find($id);
        dd($grupo);
        return redirect()->back();
    }


    // ============================
    // FIM CRUD
    // ============================

}