<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
class Type extends Model
{
    use HasFactory;
    protected $fillable =["designation"];

    function biens()
    {
        return $this->hasMany(Type::class,"id");
        
    }

    
}