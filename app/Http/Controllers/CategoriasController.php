<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categoria;
use App\Grupo;
use DB;
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = DB::select('select a.id, a.nome nomeCat, b.nome nomeGrp
                                from categorias a, grupos b
                                where a.grupo_id = b.id
                                order by a.id');
        return view('categorias.index')->with('categorias', $cats);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grps = Grupo::all();
        return view('categorias.new', compact('grps'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cats = new Categoria();
        $cats->nome = $request->get('Nome_categoria');
        $cats->grupo_id = $request->get('Grupo_produto');
        $cats->save();
        return redirect('/categorias');
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
        $cat = Categoria::find($id);
        $grps = Grupo::all();
        if(isset($cat)){
            return view('categorias.edit', compact('cat', 'grps'));
        }else{
            return redirect('/categorias');
        }
        return redirect('/categorias');
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
        $cat = Categoria::find($id);
        if(isset($cat)){
            $cat->nome = $request->input('Nome_categoria');
            $cat->grupo_id = $request->input('Nome_grupo');
            $cat->save();
        }
        return redirect('/categorias');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Categoria::find($id);
        if(isset($cat)){
            $cat->delete();
        }
        return redirect('/categorias');
    }
}