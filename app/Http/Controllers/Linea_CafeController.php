<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Linea_CafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $Lineas_Cafe=Linea_Cafe::orderBy('id','DESC')->paginate(3);
        return view('Linea_Cafe.index',compact('Lineas_Cafe')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Linea_Cafe.create');
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
        $this->validate($request,[ 'id'=>'required', 'nombre'=>'required','descripcion'=>'required']);
        Libro::create($request->all());
        return redirect()->route('Linea_Cafe.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Lineas_Cafe=Linea_Cafe::find($id);
        return  view('Linea_Cafe.show',compact('Lineas_Cafe'));
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

    $Lineas_Cafe=Linea_Cafe::find($id);
        return  view('Linea_Cafe.edit',compact('Lineas_Cafe'));
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
$this->validate($request,[ 'id'=>'required', 'nombre'=>'required','descripcion'=>'required']);
 
     Linea_Cafe::find($id)->update($request->all());
        return redirect()->route('Linea_Cafe.index')->with('success','Registro actualizado satisfactoriamente');
 

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

         Linea_Cafe::find($id)->delete();
        return redirect()->route('Linea_Cafe.index')->with('success','Registro eliminado satisfactoriamente');
    
    }
}
