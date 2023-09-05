<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'location_id',
        'master_id',
        'machine_type_id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function master()
    {
        return $this->belongsTo(Master::class);
    }

    public function machineType()
    {
        return $this->belongsTo(MachineType::class);
    }
}
