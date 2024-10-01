<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    protected $fillable = ['boarding_house_id', 'description', 'status', 'requested_at'];

    // Relationships
    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }
}
