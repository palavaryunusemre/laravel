<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();



Route::group(['namespace'=>'home','prefix'=>'home'],function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
Route::post('login',[App\Http\Controllers\SessionController::class,'storeSession'])->name('session.store');


Route::group(['namespace'=>'verification','prefix'=>'verification'],function (){
    Route::get('/',[App\Http\Controllers\IndexController::class,'index'])->name('index');
    Route::post('/{id}',[App\Http\Controllers\IndexController::class,'update'])->name('edit.post');
});








//Route::get('verificationUser',function (){
//   \App\Models\Code::create(['verification_code'=>kod]);
//});
