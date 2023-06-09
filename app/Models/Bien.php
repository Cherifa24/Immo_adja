<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Bien extends Model
{
    use HasFactory;

    protected $fillable =["type_offre","etat","localisation",
    "prix_vente","date_publication","description","galerie","id_type"];
    function types()
    {
        return $this->belongsTo(Bien::class,"id");
    }

    function alertes()
    {
        return $this->belongsTo(Alerte::class,"id");
    }
    

}
