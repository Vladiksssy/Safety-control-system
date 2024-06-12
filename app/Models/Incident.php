<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'reported_at', 'status'];
    public function correctiveActions()
    {
        return $this->hasMany(CorrectiveAction::class);
    }
}
