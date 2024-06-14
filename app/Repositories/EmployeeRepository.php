<?php

namespace App\Repositories;

use App\models\Employee;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{

    public function all()
    {
       return Employee::all();
    }

    public function create(array $data)
    {
        return Employee::create($data);
    }

    public function find($id)
    {
        return Employee::findOrFail($id);
    }

    public function update(array $data, $id)
    {
        $employee= Employee::findOrFail($id);
        $employee->update($data);
        return $employee;
    }

    public function delete($id)
    {
        return Employee::destroy($id);
    }
}
