<?php

use App\Http\Controllers\UEController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ECController;


Route::get('/', function(){
    return view('welcome');
});



Route::resource('ecs', ECController::class);


Route::get('/ues/{ue}/edit', [UEController::class, 'edit'])->name('Ues.edit');
Route::delete('/ues/{ue}', [UEController::class, 'destroy'])->name('Ues.destroy');











