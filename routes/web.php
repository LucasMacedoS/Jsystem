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
})->name('home');


//Grupos
Route::prefix('grupos')->group(function (){
    Route::get('/', 'GruposController@index')->name('grupos.index');
    Route::get('/novo', 'GruposController@novo')->name('grupos.novo');
    Route::post('/salvar', 'GruposController@salvar')->name('grupos.salvar');
    Route::get('/editar/{id}', 'GruposController@editar')->name('grupos.editar');
    Route::post('/{id}', 'GruposController@atualizar')->name('grupos.atualizar');
    Route::get('/deletar/{id}', 'GruposController@deletar')->name('grupos.deletar');
});



//Categorias
Route::prefix('categorias')->group(function (){
    Route::get('/', 'CategoriaController@index')->name('categorias.index');
    Route::get('/novo', 'CategoriaController@novo')->name('categorias.novo');
    Route::post('/salvar', 'CategoriaController@salvar')->name('categorias.salvar');
    Route::get('/editar/{id}', 'CategoriaController@editar')->name('categorias.editar');
    Route::post('/{id}', 'CategoriaController@atualizar')->name('categorias.atualizar');
    Route::get('/deletar/{id}', 'CategoriaController@deletar')->name('categorias.deletar');
});


//Produtos
Route::prefix('produtos')->group(function (){
    Route::get('/', 'ProdutoController@index')->name('produtos.index');
    Route::get('/novo', 'ProdutoController@novo')->name('produtos.novo');
    Route::post('/salvar', 'ProdutoController@salvar')->name('produtos.salvar');
    Route::get('/editar/{id}', 'ProdutoController@editar')->name('produtos.editar');
    Route::post('/{id}', 'ProdutoController@atualizar')->name('produtos.atualizar');
    Route::get('/deletar/{id}', 'ProdutoController@deletar')->name('produtos.deletar');
});


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
