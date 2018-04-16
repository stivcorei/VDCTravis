<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Estate;
use App\People;
use App\InputLot;

class Controller_Estate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nameEstate,$addressEstate,$altitudeEstate,$cityEstate,$veredaEstate,$identification)
    {
      $estate = new Estate;
      $estate->people_id = $identification;
      $estate->name = $nameEstate;
      $estate->address = $addressEstate;
      $estate->altitude = $altitudeEstate;
      $estate->municipalities_id = $cityEstate;
      $estate->vereda = $veredaEstate;
      if($estate->save() ==1 )
      {

        echo "<script type=\"text/javascript\">
                alert('Se ha guardado la información correctamente');
                location.href = 'registro_datos';
               </script>";

      }
      else
      {
        echo "<script type=\"text/javascript\">
               alert('Ha ocurido un error al actualizar la información');
               history.go(-1);
              </script>";
       exit;

      }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->isMethod("post"))
      {
        $id= $request->input('id-estate');
        $nameEstate = $request->input('names-estate');
        $addressEstate = $request->input('address-estate');
        $altitudeEstate = $request->input('altitude-estate');
        $cityEstate = $request->input('city-estate');
        $veredaEstate = $request->input('vereda-estate');



        if($request->input('btn-manage') == 'save')
        {
            $this->edit($id,$nameEstate,$addressEstate,$altitudeEstate,$cityEstate,$veredaEstate);
        }
        else if($request->input('btn-manage') == 'delete')
        {
          $id= $request->input('id-estate-remove');
          $this->destroy($id);
        }
        else if($request->input('btn-manage') == 'add')
        {
          $identification = $request->input('identification-add-estate');
          $this->create($nameEstate,$addressEstate,$altitudeEstate,$cityEstate,$veredaEstate,$identification);
        }

      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      // // $estate= DB::table('person_user_type')
      // //         ->join('people', 'person_user_type.person_id', '=', 'people.id')
      // //         ->where('person_user_type.user_type_id',2)
      // //         ->select('*')
      // //         ->get();
      // //
      // // echo $estate;
      // $estate= DB::table('people')
      //             ->select('estates.id as id_estates','*')
      //             ->join('estates', 'people.id', '=', 'estates.people_id')
      //             ->orderBy('people.id')
      //             ->get();
      //
      // $coffeeGrower= DB::table('person_user_type')
      //                     ->join('people', 'person_user_type.person_id', '=', 'people.id')
      //                     ->where('person_user_type.user_type_id',2)
      //                     ->select('*')
      //                     ->get();
      //
      //                     //echo $coffeeGrower."\n";
      //                     echo $estate;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$nameEstate,$addressEstate,$altitudeEstate,$cityEstate,$veredaEstate)
    {
      $estate = Estate::find($id);
      $estate->name = $nameEstate;
      $estate->address = $addressEstate;
      $estate->altitude = $altitudeEstate;
      $estate->municipalities_id = $cityEstate;
      $estate->vereda = $veredaEstate;
      if($estate->save() == 1)
      {
        echo "<script type=\"text/javascript\">
                alert('Se ha guardado la información correctamente');
                location.href = 'registro_datos';
               </script>";

      }
      else
      {
        echo "<script type=\"text/javascript\">
               alert('Ha ocurido un error al actualizar la información');
               history.go(-1);
              </script>";
       exit;

      }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $estates_id = $id;
      $inputLot = InputLot::destroy($estates_id);//::find($estates_id);
      $estate = Estate::find($id);



      if($estate->delete()==1)
      {
        echo "<script type=\"text/javascript\">
                alert('Se ha guardado la información correctamente');
                location.href = 'registro_datos';
               </script>";

      }
      else
      {
        echo "<script type=\"text/javascript\">
               alert('Ha ocurido un error al actualizar la información');
               history.go(-1);
              </script>";
       exit;

      }
    }
}
