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

Route::get('/', function () {
    return view('welcome');
});


Route::get('medicine/{barcode}', function ($barcode){
    $medicine = \App\Medicine::where('barcode', $barcode)->first();
    $data = [];
    if ($medicine){
        $data['medicine'] = $medicine->toArray();
        $data['uses'] = $medicine->uses->toArray();
        $data['sideEffects'] = $medicine->sideEffects->toArray();
        $data['warnings'] = $medicine->warnings->toArray();
    }else{
        $data['error'] = 'barcode not found in application database';
    }
    return $data;
});

Route::get('search/{name}', function ($name){
    $medicine = \App\Medicine::where('name', 'like' ,'%'.$name.'%')->get();
    return $medicine;
    /*
        $data = [];
        if ($medicine){
            $data['medicine'] = $medicine->toArray();
            $data['uses'] = $medicine->uses->toArray();
            $data['sideEffects'] = $medicine->sideEffects->toArray();
            $data['warnings'] = $medicine->warnings->toArray();
        }else{
            $data['error'] = 'barcode not found in application database';
        }
        return $data;
    */
});


Route::get('majd/{barcode}', function ($barcode) {

    dd($barcode);
    $medicine = \App\Medicine::find(1);

    $data = [];
    $data['medicine'] = $medicine->toArray();
    $data['uses'] = $medicine->uses->toArray();
    $data['sideEffects'] = $medicine->sideEffects->toArray();
    $data['warnings'] = $medicine->warnings->toArray();
//   dd($medicine->uses->toArray());

    return $data;

    return $medicine->sideEffects;
    return $medicine->uses;
    return $medicine->warnings;
});
