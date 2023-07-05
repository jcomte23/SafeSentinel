<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GeneralOptionsController;
use App\Http\Controllers\TypesOfDocumentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[GeneralOptionsController::class,'welcome'])->name('welcomeGuest');
Route::get("locale/{locale}",[GeneralOptionsController::class,'setLang'])->name('lang');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard',[GeneralOptionsController::class,'dashboard'])->name('dashboard');
    Route::get('settings',[GeneralOptionsController::class,'settings'])->name('settings');
    Route::resource('employees',EmployeeController::class);
    Route::resource('types_of_documents',TypesOfDocumentsController::class);
});
