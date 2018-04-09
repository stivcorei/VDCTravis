<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Costo_ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $Costos_Produccion=Costo_Produccion::orderBy('id','DESC')->paginate(3);
        return view('Costo_Produccion.index',compact('Costos_Produccion')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('Costo_Produccion.create');

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
        Costo_Produccion::create($request->all());
        return redirect()->route('Costo_Produccion.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Costos_produccion=Costo_Produccion::find($id);
        return  view('Costo_Produccion.show',compact('Costos_Produccion'))
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
          $Costos_produccion=Costo_Produccion::find($id);
        return  view('Costo_Produccion.edit',compact('Costos_Produccion'));
    
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
 
     Costo_Produccion::find($id)->update($request->all());
        return redirect()->route('Costo_Produccion.index')->with('success','Registro actualizado satisfactoriamente');
 
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
        Costo_Produccion::find($id)->delete();
        return redirect()->route('Costo_Produccion.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
