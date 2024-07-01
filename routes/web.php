<?php

use App\Http\Controllers\Web\WebCorrectiveActionController;
use App\Http\Controllers\Web\WebEmployeeController;
use App\Http\Controllers\Web\WebIncidentController;
use App\Http\Controllers\Web\WebInspectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('incidents', WebIncidentController::class);
Route::resource('inspections', WebInspectionController::class);
Route::resource('corrective_actions', WebCorrectiveActionController::class);
Route::resource('employees', WebEmployeeController::class);
