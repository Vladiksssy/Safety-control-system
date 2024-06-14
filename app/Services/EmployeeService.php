<?php

namespace App\Services;

use App\Repositories\Interfaces\EmployeeRepositoryInterface;
class EmployeeService
{
    protected $employeeRepository;
    public function __construct(EmployeeRepositoryInterface $employeeRepository){
        $this->employeeRepository = $employeeRepository;
    }
    public function getEmployees(){
        return $this->employeeRepository->all();
    }
    public function getEmployeeById($id){
        return $this->employeeRepository->find($id);
    }
    public function createEmployee($data){
        return $this->employeeRepository->create($data);
    }
    public function updateEmployee($id,$data){
        return $this->employeeRepository->update($id,$data);
    }
    public function deleteEmployee($id){
        return $this->employeeRepository->delete($id);
    }
}
