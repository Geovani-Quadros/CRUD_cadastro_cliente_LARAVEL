<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ViewsController;
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
    return view('home');
})->name('home');

//Route to load a page createCliente
Route::get('/createClient', [ViewsController::class, 'viewCreateClient'])->name('viewCreateClient');
//Route to register data of cliente in the data base
Route::post('/createClient', [ClienteController::class, 'createClient'])->name('createClient');