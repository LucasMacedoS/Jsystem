<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\Grupo;
use DB;
class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = DB::select('select a.id, a.nome nomeProd, c.nome nomeGrp, b.nome nomeCat,
                                a.manipulado, a.estoque, a.valor_unitario
                                from produtos a, categorias b, grupos c 
                                where a.categoria_id = b.id and a.grupo_id = c.id
                                order by a.id');
        return view('produtos.index')->with('produtos', $produtos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grps = Grupo::all();
        $cats = Categoria::all();
        return view('produtos.new', compact('grps', 'cats'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = new Produto();
        $prod->nome = $request->get('Nome_produto');
        $prod->categoria_id = $request->get('Categoria_produto');
        $prod->grupo_id = $request->get('Grupo_produto');
        $prod->manipulado = $request->get('Manipulado_produto');
        $prod->estoque = $request->get('Quantidade_produto');
        $prod->valor_unitario = $request->get('Preço_produto');
        $prod->save();
        return redirect('/produtos');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Produto::find($id);
        $cats = Categoria::all();
        $grps = Grupo::all();
        if(isset($prod)){
            return view('produtos.edit', compact('prod', 'cats', 'grps'));
        }else{
            return redirect('/produtos');
        }
        return redirect('/produtos');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = Produto::find($id);
        if (isset($prod)){
            $prod->nome = $request->get('Nome_produto');
            $prod->categoria_id = $request->get('Categoria_produto');
            $prod->grupo_id = $request->get('Grupo_produto');
            $prod->manipulado = $request->get('Manipulado_produto');
            $prod->estoque = $request->get('Quantidade_produto');
            $prod->valor_unitario = $request->get('Preço_produto');
            $prod->save();
        }
        return redirect('/produtos');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)){
            $prod->delete();
        }
        return redirect('/produtos');
    }
}