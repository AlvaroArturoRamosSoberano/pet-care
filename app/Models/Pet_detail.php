<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pet_detail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pet_id', 'age', 'weight_kg'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
