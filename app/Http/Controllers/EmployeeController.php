<?php

namespace App\Http\Controllers;

use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;
    public function __construct(EmployeeService $employeeService){
        $this->employeeService = $employeeService;
    }
    public function index(){
        return response()->json($this->employeeService->getEmployees());
    }
    public function store(Request $request){
        $employee = $this->employeeService->createEmployee($request->all());
        return response()->json($employee, 201);
    }
    public function show($id){
        return response()->json($this->employeeService->getEmployeeById($id));
    }
    public function update(Request $request, $id){
        $employee = $this->employeeService->updateEmployee($request->all(), $id);
        return response()->json($employee, 200);
    }
    public function destroy($id){
        $this->employeeService->deleteEmployee($id);
        return response(null, 204);
    }
}
