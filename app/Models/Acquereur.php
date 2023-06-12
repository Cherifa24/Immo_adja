<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
class Acquereur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'contact',
        'adresse',
        'password',
      
    ];

    function alertes()
    {
        return  $this->HasMany(Alerte::class,"id");
    }
    
}
