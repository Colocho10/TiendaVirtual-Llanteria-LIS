<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';
    protected $fillable = [
        'idpedido',
        'referenciacobro',
        'idtransaccionpaypal',
        'datospaypal',
        'personaid',
        'fecha',
        'costo_envio',
        'monto',
        'tipopagoid',
        'direccion_envio',
        'status'
    ];
}
