<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\WebIncidentController;
use App\Http\Controllers\WebInspectionController;
use App\Http\Controllers\WebCorrectiveActionController;
use App\Http\Controllers\WebEmployeeController;

Route::resource('incidents', WebIncidentController::class);
Route::resource('inspections', WebInspectionController::class);
Route::resource('corrective_actions', WebCorrectiveActionController::class);
Route::resource('employees', WebEmployeeController::class);
