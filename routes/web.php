<?php
use App\Http\Controllers\UeController;
use App\Http\Controllers\EcController;
use App\Http\Controllers\NoteController;

Route::resource('ues', UeController::class);
Route::resource('ecs', EcController::class);
Route::resource('notes', NoteController::class);
Route::get('/', function () {
    return "Bienvenue dans la gestion des notes";
});




