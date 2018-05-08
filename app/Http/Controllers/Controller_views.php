<?php

namespace App\Http\Controllers;


use App\IdentificationType;
use App\EmployeeRole;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Controller_views extends Controller
{
    public function ingreso()
    {
      return view("ingreso");
    }

    public function registro_datos()
    {
      $identificationType = new IdentificationType;
      $employeeRole= new EmployeeRole;

      $identificationType = $identificationType->get();
      $employeeRole= $employeeRole->get();

      $estate= DB::table('people')
                  ->select('estates.id as id_estates','*')
                  ->join('estates', 'people.id', '=', 'estates.people_id')
                  ->orderBy('people.id')
                  ->get();

      $coffeeGrower= DB::table('person_user_type')
                          ->join('people', 'person_user_type.person_id', '=', 'people.id')
                          ->where('person_user_type.user_type_id',2)
                          ->select('*')
                          ->get();

      $municipalities = DB::table('municipalities')->get();

      $dataPeople = DB::table('people')->get();

      $userType = DB::table('user_types')->get();


      return view("registro_datos",compact('identificationType','employeeRole','userType','dataPeople','estate','coffeeGrower','municipalities'));
    }

    public function register_lots()
    {
      $identificationType = new IdentificationType;
      $employeeRole= new EmployeeRole;

      $identificationType = $identificationType->get();
      $employeeRole= $employeeRole->get();

      $estate= DB::table('people')
                  ->select('estates.id as id_estates','*')
                  ->join('estates', 'people.id', '=', 'estates.people_id')
                  ->orderBy('people.id')
                  ->get();

      $coffeeGrower= DB::table('person_user_type')
                          ->join('people', 'person_user_type.person_id', '=', 'people.id')
                          ->where('person_user_type.user_type_id',2)
                          ->select('*')
                          ->get();


      return view("register_lots",compact('identificationType','employeeRole','estate','coffeeGrower'));
    }

    public function process_lots()
    {
      
    }
}
