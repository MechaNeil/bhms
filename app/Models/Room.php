<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['boarding_house_id', 'room_number', 'status'];

    // Relationships
    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }

    public function tenancies()
    {
        return $this->hasMany(Tenancy::class);
    }
}
