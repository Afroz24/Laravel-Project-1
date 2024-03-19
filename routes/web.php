<?php

use App\Http\Controllers\ApplicationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('/about','about');

// Her we are grouping the routes which are authenticated using Middleware

Route::middleware('auth')->group(function()
{
    Route::get('/form', function(){
        return view('form');
    });

    Route::view('/index','index');

    Route::get('/show',[ApplicationController::class,'read'])->name('show');

});



//below route is to view resume 
Route::get('/resume/{id}',[ApplicationController::class,'resume']);

Route::post('/store',[ApplicationController::class,'store']);



Route::get('/edit/{id}',[ApplicationController::class,'edit']);

Route::delete('/delete/{id}',[ApplicationController::class,'delete'])->name('delete');

Route::put('update/{record}',[ApplicationController::class,'update'])->name('update');






Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
