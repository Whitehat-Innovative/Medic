<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;


    /**
     * Get all of the donation for the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donation(): HasMany
    {
        return $this->hasMany(Donation::class, 'patient_id', 'id');
    }
}
