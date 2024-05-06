<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $table = 'modulo';
    protected $fillable = [
        'idmodulo',
        'titulo',
        'descripcion',
        'status'
    ];
}
