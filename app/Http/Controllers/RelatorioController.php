<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RelatorioController extends Controller
{
    public function index ()
    {
      //
    }

    public function funcionarios ()
    {
      $funcionarios = User::all();

      return view('relatorios.funcionarios.index')
        ->with('funcionarios', $funcionarios);
    }
}
