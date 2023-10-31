<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medical_record extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pet_id', 'disease_id', 'symptom_presented', 'allergie', 'prescription', 'note', 'status', 'duration'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
