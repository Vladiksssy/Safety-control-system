<?php

namespace App\Repositories;

use App\Models\CorrectiveAction;
use App\Repositories\Interfaces\CorrectiveActionRepositoryInterface;

class CorrectiveActionRepository implements CorrectiveActionRepositoryInterface
{

    public function all()
    {
        return CorrectiveAction::all();
    }

    public function create(array $data)
    {
        return CorrectiveAction::create($data);
    }

    public function find($id)
    {
        return CorrectiveAction::findOrFail($id);
    }

    public function update(array $data, $id)
    {
       $correctiveAction=CorrectiveAction::findOrFail($id);
       return $correctiveAction->update($data);
       return $correctiveAction;
    }

    public function delete($id)
    {
        return CorrectiveAction::destroy($id);
    }
}
