<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    public function pedidoshasproducto(){
        return $this->hasMany(pedidoshasproducto::class);
    }

    public function imagen(){
        return $this->hasMany(imagen::class);
    }
}
