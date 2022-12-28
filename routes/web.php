<?php

use App\Http\Controllers\crudController;
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

Route::get('/crud', [crudController::class, 'crud'])->name('crud');

Route::post('/crud/store', [crudController::class, 'store'])->name('crud_store');

Route::get('/crud/delete/{id}', [crudController::class, 'delete'])->name('crudData_delete');

Route::get('/crud/edite/{id}', [crudController::class, 'edite'])->name('croudData_edite');

Route::post('/crud/update/{id}', [crudController::class, 'update'])->name('croudData_update');