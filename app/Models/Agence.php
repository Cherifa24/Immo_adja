<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agence extends Model
{
    use HasFactory;
    protected $fillable =["email","raison_sociale","contact","adresse"];
    protected $primaryKey = "num_matricule";

    function biens()
    {
        return $this->hasMany(Bien::class,"id");
    }
}
