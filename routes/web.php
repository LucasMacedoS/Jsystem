<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rotas de autenticação
Auth::routes();

//Home
Route::get('/', 'UsuarioController@home')->name('home');
// Route::get('/', function () {
//     return view('home');
// })->name('home');

//Rota Coringa
// Route::get('/login', function () {
//     return view('auth.login');
// });

//Rotas de Login Registro
Route::get('/login', 'UsuarioController@login')->name('login');
Route::post('/login/validar', 'UsuarioController@entrar')->name('login.entrar');
Route::get('/registro', 'UsuarioController@novo')->name('registro.novo');
Route::post('/registro/salvar', 'UsuarioController@salvar')->name('registro.salvar');

//Grupos
Route::prefix('grupos')->group(function (){
    Route::get('/', 'GrupoController@index')->name('grupos.index')->middleware('auth');
    Route::get('/novo', 'GrupoController@novo')->name('grupos.novo')->middleware('auth');
    Route::post('/salvar', 'GrupoController@salvar')->name('grupos.salvar')->middleware('auth');
    Route::get('/editar/{id}', 'GrupoController@editar')->name('grupos.editar')->middleware('auth');
    Route::post('/{id}', 'GrupoController@atualizar')->name('grupos.atualizar')->middleware('auth');
    Route::post('/excluir/{id}', 'GrupoController@excluir')->name('grupos.excluir')->middleware('auth');
});



//Categorias
Route::prefix('categorias')->group(function (){
    Route::get('/', 'CategoriaController@index')->name('categorias.index')->middleware('auth');
    Route::get('/novo', 'CategoriaController@novo')->name('categorias.novo')->middleware('auth');
    Route::post('/salvar', 'CategoriaController@salvar')->name('categorias.salvar')->middleware('auth');
    Route::get('/editar/{id}', 'CategoriaController@editar')->name('categorias.editar')->middleware('auth');
    Route::post('/{id}', 'CategoriaController@atualizar')->name('categorias.atualizar')->middleware('auth');
    Route::post('/excluir/{id}', 'CategoriaController@excluir')->name('categorias.excluir')->middleware('auth');
});


//Produtos
Route::prefix('produtos')->group(function (){
    Route::get('/', 'ProdutoController@index')->name('produtos.index')->middleware('auth');
    Route::get('/novo', 'ProdutoController@novo')->name('produtos.novo')->middleware('auth');
    Route::post('/salvar', 'ProdutoController@salvar')->name('produtos.salvar')->middleware('auth');
    Route::get('/editar/{id}', 'ProdutoController@editar')->name('produtos.editar')->middleware('auth');
    Route::post('/{id}', 'ProdutoController@atualizar')->name('produtos.atualizar')->middleware('auth');
    Route::post('/excluir/{id}', 'ProdutoController@excluir')->name('produtos.excluir')->middleware('auth');
});

//Relatórios
Route::prefix('relatorios')->group(function (){
    Route::get('/', 'RelatorioController@index')->name('relatorios.index')->middleware('auth');
    Route::get('/funcionarios', 'RelatorioController@funcionarios')->name('relatorios.funcionarios')->middleware('auth');
});


//Caixa
Route::prefix('Caixa')->group(function (){

    Route::get('index', 'CaixaController@index')->name('caixa.index')->middleware('auth');
    Route::get('pagamento/balcao', 'CaixaController@balcao')->name('caixa.balcao')->middleware('auth');
    Route::post('pagamento/comanda/', 'CaixaController@comanda')->name('caixa.comanda')->middleware('auth');
    Route::post('pagamento/comanda/finalizar', 'CaixaController@comanda_pagamento')->name('caixa.comanda.pagamento')->middleware('auth');
    Route::post('sangria', 'CaixaController@sangria')->name('caixa.sangria')->middleware('auth');
    Route::post('suplemento', 'CaixaController@suplemento')->name('caixa.suplemento')->middleware('auth');

});



//Comandas
Route::get('/comandas', 'ComandaController@index')->name('comandas.index')->middleware('auth');


//Usuario Relatório
Route::get('/usuario', 'UsuarioController@index')->name('usuarios.index')->middleware('auth');





//Rotas em JSON (API Mobile)
Route::get('products', function() {
    return Produto::all();
});


Route::get('products/{id}', function($id) {
    return Produto::find($id);
});

Route::post('products', function(Request $request) {
    return Produto::create($request->all());
});

Route::put('products/{id}', function(Request $request, $id) {
    $article = Produto::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('products/{id}', function($id) {
    Produto::find($id)->delete();

    return 204;
});
