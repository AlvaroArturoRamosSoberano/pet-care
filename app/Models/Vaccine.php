<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vaccine extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function petVaccines()
    {
        return $this->hasMany(Pets_vaccines::class);
    }
}
