<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente'; 
    protected $primaryKey = 'CLI_ID';
    public $timestamps = false;
    protected $fillable = [
        'CLI_NOMBRE', // Especifica el nombre de la columna en la tabla
        'CLI_APELLIDO',
        'CLI_CORREO',
        'CLI_CONTRASENA',
        'CLI_TELEFONO',
        'CLI_DIRECCION',
        'CLI_FECHA_REGISTRO',
        'ROL_ID'
    ];
}
