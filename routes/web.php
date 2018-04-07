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
Route::get("/datos_productor","Controller_views@datos_productor");
