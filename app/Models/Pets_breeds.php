<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pets_breeds extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pet_id', 'breed_id'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
}
