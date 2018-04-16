<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\YieldFactor;
use App\CupProfile;
use App\InputLot;

class Controller_Lots extends Controller
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
    public function create($idEstate,$inputDate,$kilosNumber,$avaibleKilos,$pasillaPercentage,$whitePercentage,
                              $fermentedPercentage,$borer,$yieldfactor,$cupscore,$armona,$flavor,$acidity,$body,
                                  $sweetnees,$balanceValue,$balanceDescription,$btnManage)
    {
      $yieldFactor = new YieldFactor;
      $cupProfile = new CupProfile;
      $inputLot = new InputLot;

      $yieldFactor->pasilla_percentage= $pasillaPercentage;
      $yieldFactor->white_percentage= $whitePercentage;
      $yieldFactor->fermented_percentage= $fermentedPercentage;
      $yieldFactor->berry_borer_percentage= $borer;
      $yieldFactor->yield_factor= $yieldfactor;
      $save1 = $yieldFactor->save();
      $cupProfilesId=$yieldFactor->id;


      $cupProfile->cup_score = $cupscore;
      $cupProfile->aroma = $armona;
      $cupProfile->flavor = $flavor;
      $cupProfile->acidity = $acidity;
      $cupProfile->body = $body;
      $cupProfile->sweetness = $sweetnees;
      $cupProfile->balance_value = $balanceValue;
      $cupProfile->balance_description = $balanceDescription;
      $cupProfile->total_input_weight = 10;
      $cupProfile->estimated_output = 100;
      $save2 = $cupProfile->save();
      $yieldFactorId = $cupProfile->id;



      $inputLot->estates_id = $idEstate;
      $inputLot->input_date = $inputDate;
      $inputLot->kilos_number = $kilosNumber;
      $inputLot->available_kilos = $avaibleKilos;
      $inputLot->cup_profiles_id = $cupProfilesId;
      $inputLot->yield_factors_id = $yieldFactorId;
      $save3 = $inputLot->save();

      if($save1 == 1 && $save2 == 1 && $save3 == 1)
      {
        echo "<script type=\"text/javascript\">
                alert('Se ha guardado la información correctamente');
                location.href = 'register_lots';
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
        $idEstate = $request->input('id-estate');
        $inputDate = $request->input('input-date');
        $kilosNumber = $request->input('kilos-number');
        $avaibleKilos = $request->input('avaible-kilos');
        $pasillaPercentage = $request->input('pasilla-percentage');
        $whitePercentage = $request->input('white-percentage');
        $fermentedPercentage = $request->input('fermented-percentage');
        $borer = $request->input('borer');
        $yieldfactor = $request->input('yield-factor');
        $cupscore = $request->input('cup-score');
        $armona = $request->input('aroma');
        $flavor = $request->input('flavor');
        $acidity = $request->input('acidity');
        $body = $request->input('body');
        $sweetnees = $request->input('sweetnees');
        $balanceValue = $request->input('balance-value');
        $balanceDescription = $request->input('balance-description');
        $btnManage = $request->input('btn-manage');

        if($btnManage == "add")
        {

          $this->create($idEstate,$inputDate,$kilosNumber,$avaibleKilos,$pasillaPercentage,$whitePercentage,
                                    $fermentedPercentage,$borer,$yieldfactor,$cupscore,$armona,$flavor,$acidity,$body,
                                        $sweetnees,$balanceValue,$balanceDescription,$btnManage);

        }
      }
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
        //
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
    }
}
