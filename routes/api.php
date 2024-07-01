<?php

use App\Http\Controllers\Api\CorrectiveActionController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\IncidentController;
use App\Http\Controllers\Api\InspectionController;
use Illuminate\Support\Facades\Route;

Route::apiResource('incidents', IncidentController::class);
Route::apiResource('employees', EmployeeController::class);
Route::apiResource('corrective-actions', CorrectiveActionController::class);
Route::apiResource('inspections', InspectionController::class);
