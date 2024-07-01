<?php

namespace App\Services;

use App\Repositories\Interfaces\IncidentRepositoryInterface;
class IncidentService
{

    protected $incidentRepository;
    public function __construct( IncidentRepositoryInterface $incidentRepository){
        $this->incidentRepository = $incidentRepository;
    }
    public function getIncidents()
    {
        return $this->incidentRepository->all();
    }
    public function getIncidentById($id){
        return $this->incidentRepository->find($id);
    }
    public function createIncident(array $data){
        return $this->incidentRepository->create($data);
    }
    public function updateIncident(array $data,$id){
        return $this->incidentRepository->update($data, $id);
    }
    public function deleteIncident($id){
        return $this->incidentRepository->delete($id);
    }

    public function getIncidentsForDropdown()
    {
        return $this->incidentRepository->all()->pluck('description', 'id');
    }


}
