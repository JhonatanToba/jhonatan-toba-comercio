<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    use HasFactory;

    public function producto(){
        return $this->belongsTo(producto::class);
    }
}
