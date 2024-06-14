<?php

namespace App\Repositories;

use App\Models\Inspection;
use App\Repositories\Interfaces\InspectionRepositoryInterface;

class InspectionRepository implements InspectionRepositoryInterface
{

    public function all()
    {
        return Inspection::all();
    }

    public function create(array $data)
    {
        return Inspection::create($data);
    }

    public function find($id)
    {
       return Inspection::findOrfail($id);
    }

    public function update(array $data, $id)
    {
        $inspection=Inspection::findOrFail($id);
        $inspection->update($data);
        return $inspection;
    }

    public function delete($id)
    {
        return Inspection::destroy($id);
    }
}
