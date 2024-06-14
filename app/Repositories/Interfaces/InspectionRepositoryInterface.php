<?php

namespace App\Repositories\Interfaces;

interface InspectionRepositoryInterface{

    public function all();

    public function create(array $data);
    public function find($id);

    public function update(array $data, $id);
    public function delete($id);
}
