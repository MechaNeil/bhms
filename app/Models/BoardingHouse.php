<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardingHouse extends Model
{
    protected $fillable = ['name', 'address', 'landlord_id'];

    // Relationships
    public function landlord()
    {
        return $this->belongsTo(User::class, 'landlord_id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }
}
