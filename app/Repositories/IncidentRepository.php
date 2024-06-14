<?php

namespace App\Repositories;

use App\Models\Incident;
use App\Repositories\Interfaces\IncidentRepositoryInterface;

class IncidentRepository implements IncidentRepositoryInterface
{

    public function all()
    {
        return Incident::all();
    }

    public function create(array $data)
    {
        return Incident::create($data);
    }

    public function find($id)
    {
        return Incident::findOrFail($id);
    }

    public function update(array $data, $id)
    {
        $incident=Incident::findOrFail($id);
        $incident->update($data);
        return $incident;
    }

    public function delete($id)
    {
        return Incident::destroy($id);
    }
}
