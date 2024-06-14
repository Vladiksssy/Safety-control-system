<?php

namespace App\Services;
use App\Repositories\Interfaces\InspectionRepositoryInterface;
class InspectionService
{
protected $inspectionRepository;
public function __construct(InspectionRepositoryInterface $inspectionRepository){
    $this->inspectionRepository = $inspectionRepository;
}
public function getInspections(){
    return $this->inspectionRepository->all();
}
public function getInspectionById($id){
    return $this->inspectionRepository->find($id);
}
public function createInspection(array $data){
    return $this->inspectionRepository->create($data);
}
public function updateInspection(array $data,$id){
    return $this->inspectionRepository->update($data,$id);
}
public function deleteInspection($id){
    return $this->inspectionRepository->delete($id);
}

}
