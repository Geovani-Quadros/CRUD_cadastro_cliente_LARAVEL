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

Route::get('/', [ViewsController::class, 'viewHome'])->name('home');

//Route to load a page createClient
Route::get('/cadastrar', [ViewsController::class, 'viewCreate'])->name('viewCreateClient');
//Route to register data of cliente in the data base
Route::post('/cadastrar', [ClienteController::class, 'createClient'])->name('createClient');

//Route to load a page readClient
Route::get('/listar', [ClienteController::class, 'readClient'])->name('readClient');

//Route to load a page of the editClient
Route::get('/editar/{id}', [ViewsController::class, 'editClient'])->name('viewEditClient');
//Route to update client in database
Route::put('/update/{id}', [ClienteController::class, 'updateClient'])->name('updateClient');

//Route to delete client in database
Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('deleteUser');