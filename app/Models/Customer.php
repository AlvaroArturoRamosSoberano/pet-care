<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'last_name', 'email', 'password', 'phone_number', 'address', 'image_path'];
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
