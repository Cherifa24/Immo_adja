<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Agence;
use App\Models\Alerte;
use App\Models\Type;


class Bien extends Model
{
    use HasFactory;

    protected $fillable =["type_offre","etat","localisation",
    "prix_vente","date_publication","description","galerie","id_type"];
    public function types():BelongsTo
    {
        return $this->belongsTo(Type::class,"id");
    }

    public function alertes():BelongsTo
    {
        return $this->belongsTo(Alerte::class,"id");
    }

    public function agence():BelongsTo{
        return $this->belongsTo(Agence::class);
    }
    

}
