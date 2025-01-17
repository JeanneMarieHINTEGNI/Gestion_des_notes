<?php
use App\Http\Controllers\UEController;

Route::get('/ues', [UEController::class, 'index'])->name('ues.index');
Route::get('/ues/{ue}/edit', [UEController::class, 'edit'])->name('ues.edit');
Route::delete('/ues/{ue}', [UEController::class, 'destroy'])->name('ues.destroy');











