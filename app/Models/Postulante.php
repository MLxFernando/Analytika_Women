<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;
    protected $table = 'postulante'; 
    protected $primaryKey = 'POS_ID';
    public $timestamps = false;
    protected $fillable = [
        'POS_NOMBRE', // Especifica el nombre de la columna en la tabla
        'POS_APELLIDO',
        'POS_CORREO',
        'POS_CONTRASENA',
        'POS_DIRECCION',
        'POS_FECHA_NACIMIENTO',
        'POS_EXPERIENCIA',
        'POS_EMPLEO',
        'ROL_ID'
    ];
}
