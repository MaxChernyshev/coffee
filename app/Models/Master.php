<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'location_id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
