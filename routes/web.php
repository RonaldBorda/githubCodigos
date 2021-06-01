<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalzadoController;
use App\Http\Controllers\VentaController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});
Route::resource('calzado',CalzadoController::class);
Auth::routes();

Route::get('/home', [CalzadoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
Route::get('/', [CalzadoController::class, 'index'])->name('home');


Route::resource('ventas',VentaController::class);
});