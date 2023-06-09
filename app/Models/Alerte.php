<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alerte extends Model
{
    use HasFactory;

    function biens()
    {
        return  $this->hasOne(Bien::class,"id");
    }

    function acquereurs()
    {
        return  $this->belongsTo(Aquereur::class,"id");
    }
    
}
