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

    public function foto(){
        return $this->hasMany(foto::class, "productos_id");
    }
}
