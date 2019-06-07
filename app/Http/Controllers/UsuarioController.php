<?php

namespace App\Http\Controllers;

use App\Models\BalancoCaixa;
use Illuminate\Http\Request;
use App\User;
use App\Models\Comanda;
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

      $usuario = User::where('email', $request->email)->first();

      // dd($usuario);

      if(($usuario != null) && (Hash::check($request->password, $usuario->password))){


          Auth::loginUsingId($usuario->id);

          return redirect()->route('home')->with('success_toast', 'Usuário logado!');
      }

      return redirect()->back()->with('error', 'Usuário ou senha incorreta!');

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

        Auth::loginUsingId($usuario->id);

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

    public function home ()
    {

      $funcionarios = User::where('perfil', 'usuario')->where('status', 1)->count();
      $comandas = Comanda::where('status', 'ATIVO')->count();

      $caixa_suplemento = BalancoCaixa::select('valor')->where('tipo' , 'Suplemento')->sum('valor');
      $caixa_sangria = BalancoCaixa::select('valor')->where('tipo' , 'sangria')->sum('valor');
      $caixa_entrada = BalancoCaixa::select('valor')->where('tipo' , 'Entrada')->sum('valor');

      $caixa = (($caixa_suplemento + $caixa_entrada) - $caixa_sangria);


      return view('home')
        ->with('funcionarios', $funcionarios)
        ->with('caixa', $caixa)
        ->with('comandas', $comandas);
    }

}
