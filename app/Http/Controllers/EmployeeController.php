<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return Employee::all();
    }
    public function store(Request $request){
        $employee = Employee::query()->create($request->all());
        return response()->json($employee, 201);
    }
    public function show($id){
        return Employee::query()->findOrFail($id);
    }
    public function update(Request $request, $id){
        $employee = Employee::query()->findOrFail($id);
        $employee->update($request->all());
        return response()->json($employee, 200);
    }
    public function destroy($id){
        Employee::query()->findOrFail($id)->delete();
        return response(null, 204);
    }
}
