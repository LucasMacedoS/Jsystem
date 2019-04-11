<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{

    // ============================
    // INICIO CRUD
    // ============================


    // Retorna todos os usuários cadastrados
    public function index()
    {
        //
    }

    // Retorna todos os usuários cadastrados
    public function login()
    {
        //
    }


    // Retorna o formulário de cadastro de usuário
    public function novo()
    {
        return view('auth.login');
    }


    // Salva no banco de dados um usuário cadastrado
    public function salvar(Request $request)
    {
        //Colocar validações
        $usuario = new User;
        $usuario->fill($request->all());
        $usuario->save();

        return redirect()->route('home')->with('success_toast', 'Usuário Logado!');
    }


    public function show($id)
    {
        //
    }


    // Retorna o formulário de edição de usuário
    public function editar($id)
    {
        //
    }


    // Atualiza o cadastro de um usuário no banco de dados
    public function update(Request $request, $id)
    {
        //
    }


    // Deleta um usuário do banco de dados
    public function destroy($id)
    {
        //
    }

    // ============================
    // FIM CRUD
    // ============================

}
