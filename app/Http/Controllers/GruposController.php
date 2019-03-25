<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Grupo;
class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();
        return view('grupos.index')->with('grupos', $grupos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos.new');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grp = new Grupo();
        $grp->nome = $request->get('Nome_grupo');
        $grp->save();
        return redirect('/grupos');
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
        $grp = Grupo::find($id);
        if(isset($grp)){
            return view('grupos.edit', compact('grp'));
        }else{
            return redirect('/grupos');
        }
        return redirect('/grupos');
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
        $grp = Grupo::find($id);
        if(isset($grp)){
            $grp->nome = $request->input('Nome_grupo');
            $grp->save();
        }
        return redirect('/grupos');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grp = Grupo::find($id);
        if(isset($grp)){
            $grp->delete();
        }
        return redirect('/grupos');
    }
}