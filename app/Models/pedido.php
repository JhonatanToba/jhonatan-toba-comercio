<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pedidoshasproducto(){
        return $this->belongsTo(pedidoshasproducto::class);
    }

    public function pago(){
        return $this->belongsTo(pago::class);
    }
}
