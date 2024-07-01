<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmployeeService;
class WebEmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getEmployees();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $this->employeeService->createEmployee($request->all());
        return redirect()->route('employees.index');
    }

    public function show($id)
    {
        $employee = $this->employeeService->getEmployeeById($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = $this->employeeService->getEmployeeById($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $this->employeeService->updateEmployee($request->all(), $id);
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $this->employeeService->deleteEmployee($id);
        return redirect()->route('employees.index');
    }
}
