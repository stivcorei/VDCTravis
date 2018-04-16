<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $Maquinas=Maquina::orderBy('id','DESC')->paginate(3);
        return view('Maquina.index',compact('Maquinas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Maquina.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
        $this->validate($request,[ 'id'=>'required', 'nombre'=>'required']);
        Libro::create($request->all());
        return redirect()->route('Maquina.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Maquinas=Maquina::find($id);
        return  view('Maquina.show',compact('Maquinas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    $Maquinas=Maquina::find($id);
        return  view('Maquina.edit',compact('Maquinas'));
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
        //
$this->validate($request,[ 'id'=>'required', 'nombre'=>'required']);
 
     Maquina::find($id)->update($request->all());
        return redirect()->route('Maquina.index')->with('success','Registro actualizado satisfactoriamente');
 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

         Maquina::find($id)->delete();
        return redirect()->route('Maquina.index')->with('success','Registro eliminado satisfactoriamente');
    
    }
}
