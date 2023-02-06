<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;


    /**
     * Get all of the donations for the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class, 'patient_id', 'id');
    }
}
