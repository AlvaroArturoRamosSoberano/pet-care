<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['pet_name', 'birthday', 'specie_id', 'hair_color', 'image_path'];
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function species()
    {
        return $this->belongsTo(Specie::class);
    }
    public function petDetails()
    {
        return $this->hasMany(Pet_detail::class);
    }
    public function petsVaccines()
    {
        return $this->hasMany(Pets_vaccines::class);
    }
    public function petsBreeds()
    {
        return $this->hasMany(Pets_breeds::class);
    }
    public function medical_records() {
        return $this->hasMany(Medical_record::class);
    }
}
