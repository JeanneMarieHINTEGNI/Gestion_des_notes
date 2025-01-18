<?php

use App\Http\Controllers\UEController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('welcome');
});

Route::get('/ues', [UEController::class, 'index'])->name('Ues.index');

Route::get('/ues/{ue}/edit', [UEController::class, 'edit'])->name('Ues.edit');
Route::delete('/ues/{ue}', [UEController::class, 'destroy'])->name('Ues.destroy');











