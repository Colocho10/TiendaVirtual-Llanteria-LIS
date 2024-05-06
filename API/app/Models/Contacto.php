<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto';
    protected $fillable = [
        'id',
        'nombre',
        'email',
        'mensaje',
        'ip',
        'dispositivo',
        'useragent',
        'datecreated'
    ];
}