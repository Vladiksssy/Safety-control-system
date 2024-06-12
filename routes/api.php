<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\CorrectiveActionController;

Route::apiResource('incidents', IncidentController::class);
Route::apiResource('employees', EmployeeController::class);
Route::apiResource('corrective-actions', CorrectiveActionController::class);
Route::apiResource('inspections', InspectionController::class);
