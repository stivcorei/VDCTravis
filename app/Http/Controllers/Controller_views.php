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
      return view("registro_datos");
    }
}
