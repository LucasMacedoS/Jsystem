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

Use App\Produto;

//Home
Route::get('/', function () {
    return view('home');
});

//Grupos
Route::get('/grupos', 'GruposController@index')->name('grupos.index');
Route::get('/grupos/novo', 'GruposController@create')->name('grupos.novo');
Route::post('/grupos/salvar', 'GruposController@store')->name('grupos.salvar');
Route::get('/grupos/deletar/{id}', 'GruposController@destroy');
Route::get('/grupos/editar/{id}', 'GruposController@edit');
Route::post('/grupos/{id}', 'GruposController@update');

//Categorias
Route::get('/categorias', 'CategoriasController@index')->name('categorias.index');
Route::get('/categorias/novo', 'CategoriasController@create')->name('categorias.novo');
Route::post('/categorias/salvar', 'CategoriasController@store')->name('categorias.salvar');
Route::get('/categorias/deletar/{id}', 'CategoriasController@destroy');
Route::get('/categorias/editar/{id}', 'CategoriasController@edit');
Route::post('/categorias/{id}', 'CategoriasController@update');

//Produtos
Route::get('/produtos', 'ProdutoController@index')->name('produtos.index');
Route::get('/produtos/novo', 'ProdutoController@create')->name('produtos.novo');
Route::post('/produtos/salvar', 'ProdutoController@store')->name('produtos.salvar');
Route::get('/produtos/deletar/{id}', 'ProdutoController@destroy');
Route::get('/produtos/editar/{id}', 'ProdutoController@edit')->name('produtos.editar');
Route::post('/produtos/{id}', 'ProdutoController@update');

//Comandas
Route::get('/comandas', 'ComandaController@index')->name('comandas.index');

//Usuario
Route::get('/usuario', 'UsuarioController@index')->name('usuarios.index');


// rotas em JSON

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
