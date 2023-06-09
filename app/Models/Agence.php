<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agence extends Model
{
    use HasFactory;
    protected $fillable =["num_matriculation","email","raison_sociale","num_telephone","adresse"];


    function biens()
    {
        return $this->hasMany(Bien::class,"id");
    }
}
