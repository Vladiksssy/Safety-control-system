<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrectiveAction extends Model
{
    use HasFactory;
    protected $fillable = ['incident_id','description','implemented_at'];
    public function incident()
    {
        return $this->belongsTo(Incident::class);
    }
}
