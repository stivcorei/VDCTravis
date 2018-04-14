<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Controller_Data extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // if($request->isMethod("post"))
        // {
        //   $user = $_POST['type-user'];
        //   $identification = $_POST['identification_card'];
        //   return view("registro_datos",compact('user','identification'));
        // }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user,$type_identification,$identification,$name,$last_name,$telephone,$address,$email)
    {
        $person = new Person;
        $person->id = $identification;
        $person->names = $name;
        $person->surnames = $last_name;
        $person->phone = $telephone;
        $person->address = $address;
        $person->email = $email;
        $person->employee_roles_id = $user;
        $person->identification_types_id = $type_identification;

        $person->save();

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
        $user = $request->input('type-user');
        $type_identification = $request->input('type-identification');
        $identification = $request->input('identification-card');
        $name = $request->input('names');
        $last_name = $request->input('last-names');
        $telephone = $request->input('telephone');
        $address = $request->input('address');
        $email = $request->input('email');

        if($request->input('type-user') == 1 && $request->input('save') != "save")
        {
          return view("registro_datos",compact('user','type_identification','identification','name','last_name','telephone','address','email'));
        }
        else if($request->input('type-user') == 2 && $request->input('save') != "save")
        {
          return view("registro_datos",compact('user','type_identification','identification','name','last_name','telephone','address','email'));
        }
        else if($request->input('type-user') == 3 && $request->input('save') != "save")
        {
          return view("registro_datos",compact('user','type_identification','identification','name','last_name','telephone','address','email'));
        }
        else if($request->input('save') == "save")
        {
          $this->create($user,$type_identification,$identification,$name,$last_name,$telephone,$address,$email);
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
