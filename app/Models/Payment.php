<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['tenancy_id', 'amount', 'payment_date', 'status'];

    // Relationships
    public function tenancy()
    {
        return $this->belongsTo(Tenancy::class);
    }
}
