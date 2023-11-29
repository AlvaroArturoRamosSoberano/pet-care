<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pet_name', 'birthday', 'specie_id', 'hair_color', 'image_path', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function specie()
    {
        return $this->belongsTo(Specie::class);
    }
    public function petDetails()
    {
        return $this->hasMany(Pet_detail::class);
    }
    public function petVaccines()
    {
        return $this->hasMany(Pet_vaccine::class);
    }
    public function petBreeds()
    {
        return $this->hasMany(Pet_breed::class);
    }
    public function medical_records()
    {
        return $this->hasMany(Medical_record::class);
    }
}
