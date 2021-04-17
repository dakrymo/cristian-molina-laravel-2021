<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    public function categoria(){
        return $this->belongsTo(categoria::class);
    }

    public function imagene(){
        return $this->hasMany(imagene::class);
    }

    public function cliente(){
        return $this->belongsToMany(cliente::class);
    }
}


