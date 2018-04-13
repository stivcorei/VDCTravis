<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_views extends Controller
{
    public function ingreso()
    {
      return view("ingreso");
    }

    public function registro_datos()
    {
      $prueba_caficultores2= '1099709049';
      $prueba_caficultores3 = 'Victor Alfonso Cruz Gaviria';
      $prueba_caficultores4 = 'Pijao';
      $prueba_caficultores5= 'Cra 20 # 10-10';
      $prueba_caficultores6 = '2000mns';
      $prueba_caficultores7 = 'Pijao';
      $prueba_caficultores8 = 'Palmera';

      $prueba = array($prueba_caficultores2,$prueba_caficultores3,$prueba_caficultores4,$prueba_caficultores5,$prueba_caficultores6,
              $prueba_caficultores7,$prueba_caficultores8);

      return view("registro_datos",compact("prueba_caficultores2","prueba_caficultores3","prueba_caficultores4","prueba_caficultores5","prueba_caficultores6",
              "prueba_caficultores7","prueba_caficultores8"));
    }
}
