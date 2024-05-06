<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reembolso extends Model
{
    use HasFactory;

    protected $table = 'reembolso';
    protected $fillable = [
        'id',
        'pedidoid',
        'idtransaccion',
        'datosreembolso',
        'observacion',
        'status'
    ];
}
