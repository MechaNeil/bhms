<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['username', 'email', 'password', 'role', 'phone_number', 'address'];

    // Relationships
    public function tenancies()
    {
        return $this->hasMany(Tenancy::class);
    }

    public function boardingHouses()
    {
        return $this->hasMany(BoardingHouse::class, 'landlord_id');  // Assuming users with role 'landlord' can manage multiple boarding houses.
    }
    
    
}

