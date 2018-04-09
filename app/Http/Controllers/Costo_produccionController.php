<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Costo_produccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $Costos_Produccion=Costo_produccion::orderBy('id','DESC')->paginate(3);
        return view('Costo_produccion.index',compact('Costos_Produccion')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('Costo_produccion.create');

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
        $this->validate($request,[ 'id'=>'required', 'valor'=>'required', 'descripcion'=>'required']);
        Costo_produccion::create($request->all());
        return redirect()->route('Costo_produccion.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Costos_produccion=Costo_produccion::find($id);
        return  view('Costo_produccion.show',compact('Costos_produccion'))
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
          $Costos_produccion=Costo_produccion::find($id);
        return  view('Costo_produccion.edit',compact('Costos_produccion'));
    
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

        $this->validate($request,[ 'id'=>'required', 'valor'=>'required', 'descripcion'=>'required']);
 
     Costo_produccion::find($id)->update($request->all());
        return redirect()->route('Costo_produccion.index')->with('success','Registro actualizado satisfactoriamente');
 
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
        Costo_produccion::find($id)->delete();
        return redirect()->route('Costo_produccion.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
