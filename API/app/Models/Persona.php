<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';
    protected $fillable = [
        'idpersona',
        'identificacion',
        'nombres',
        'apellidos',
        'telefono',
        'email_user',
        'password',
        'nit',  
        'nombrefiscal',
        'direccionfiscal',
        'token',
        'rolid',
        'datecreated',
        'status'
    ];
}
