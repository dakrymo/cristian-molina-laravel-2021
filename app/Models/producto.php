<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    public function categorias(){
        return $this->belongsTo((categorias::class));
    }

    public function imagenes(){
        return $this->hasMany((imagene::class));
    }

    public function cliente(){
        return $this->belongsToMany((cliente::class));
    }
}


