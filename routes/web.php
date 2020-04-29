<?php



Route::get('/', function () {
  return view('welcome');
});

Route::resource('student','StudentController');


//View Page
Route::get('ViewPages', 'ViewController@index');
Route::post('ViewPages', 'ViewController@index');

//Route::get('/export','Students@exportData');