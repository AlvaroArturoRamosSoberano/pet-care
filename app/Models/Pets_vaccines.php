<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pets_vaccines extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pet_id', 'vaccine_id', 'aplication', 'next_aplication'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }
}
