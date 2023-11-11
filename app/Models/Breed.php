<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class breed extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function petBreeds()
    {
        return $this->hasMany(Pet_breed::class);
    }
}
