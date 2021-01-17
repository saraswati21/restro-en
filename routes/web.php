<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestroController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::group(['middleware'=>'web'],function(){
    Route::get('/',[RestroController::class,'index']);
    Route::get('/list',[RestroController::class,'list']);
    Route::view('/add','add');
    Route::post('/add',[RestroController::class,'add']);
    Route::get('/delete/{id}',[RestroController::class,'delete']);
    Route::get('/edit/{id}',[RestroController::class,'edit']);
    Route::post('edit',[RestroController::class,'update']);
    Route::view('register','register');
    Route::post('register',[RestroController::class,'register']);
    Route::view('login','login');
    Route::post('login',[RestroController::class,'login']);
});
