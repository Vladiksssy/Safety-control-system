<?php

namespace App\Services;

use App\Repositories\Interfaces\CorrectiveActionRepositoryInterface;
class CorrectiveActionService
{
private $correctiveActionRepository;
public function __construct(CorrectiveActionRepositoryInterface $correctiveActionRepository){
    $this->correctiveActionRepository = $correctiveActionRepository;
}
public function getCorrectiveActions(){
    return $this->correctiveActionRepository->all();
}
public function getCorrectiveActionById($id){
    return $this->correctiveActionRepository->find($id);
}
public function createCorrectiveAction(array $data){
    return $this->correctiveActionRepository->create($data);
}
public function updateCorrectiveAction(array $data,$id){
    return $this->correctiveActionRepository->update($data,$id);
}
public function deleteCorrectiveAction($id){
    return $this->correctiveActionRepository->delete($id);
}

}
