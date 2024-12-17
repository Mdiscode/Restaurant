<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\RestoController;
// use App\Http\Middleware\CurtomAuth;
// Route::middleware('CurtomAuth')->group(function(){
    // Route::get('/home',[RestoController::class,'display']);
    // Route::view("/home",'Home');
// Route::view('/hello','Home');
Route::get('/list',[RestoController::class,'list']);
Route::post('/add',[RestoController::class,'add']);
Route::view('/add','add');
Route::get('/delete/{id}',[RestoController::class,'delete']);
Route::get('/edit/{id}',[RestoController::class,'update']);
Route::post('/upd',[RestoController::class,'edit']);
Route::view('/register','register');
Route::post('/register',[RestoController::class,'register']);
Route::view('login','login');
Route::post('/login',[RestoController::class,'login']);
Route::get('/logout',[RestoController::class,'logout']);
// });

Route::middleware('setlang')->group(function(){
    Route::get('/',[RestoController::class,'display']);
    Route::get('setlang/{lang}',function($lang){
        Session::put('lang',$lang);
        return redirect('/');
    });
});

//search
Route::get('search',[RestoController::class,"search"]);