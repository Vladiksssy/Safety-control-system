<?php

namespace App\Services;

use App\Events\IncidentReported;
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
        $incident = $this->incidentRepository->create($data);
        IncidentReported::dispatch($incident);
        return $incident;
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
