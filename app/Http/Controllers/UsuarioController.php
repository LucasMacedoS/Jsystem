<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

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
        return view('auth.login');
    }

    // Retorna todos os usuários cadastrados
    public function entrar(Request $request)
    {
      $user = User::where('email', $request->email)->first();

      // dd($user);

      if(($user != null) && (Hash::check($request->password, $user->password))){


          Auth::loginUsingId($user->id);

          return redirect()->route('home')->with('success_toast', 'Usuário logado!');
      }

      return redirect()->back()->with('error', 'Deu ruim em alguma coisa!');

    }


    // Retorna o formulário de cadastro de usuário
    public function novo()
    {
        return view('auth.registro');
    }


    // Salva no banco de dados um usuário cadastrado
    public function salvar(Request $request)
    {
        //Colocar validações
        $usuario = new User;
        $usuario->fill($request->all());
        $usuario->password = hash::make($request->password);
        $usuario->save();

        return redirect()->route('home')->with('success_toast', 'Usuário Cadastrado e Logado!');
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
