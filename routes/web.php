<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('ingreso');
// });
//
// Route::get('/principal',function()
// {
//    return view('datos_productor');
// });

Route::get("/","Controller_views@ingreso");
Route::get("/registro_datos","Controller_views@registro_datos");
Route::get("/register_lots","Controller_views@register_lots");

Route::post("/update_estate","Controller_Estate@store");


Route::resource('Maquina', 'MaquinaController');

Route::post("/create_data","Controller_Data@store");
Route::post("/remove_estate","Controller_Estate@store");
Route::post("/add_estate","Controller_Estate@store");
Route::post("/create_estate","Controller_Estate@store");
Route::post("/create_lots","Controller_Lots@store");
