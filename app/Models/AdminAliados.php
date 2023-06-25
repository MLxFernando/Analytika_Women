<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAliados extends Model
{
    use HasFactory;
    protected $table = 'admin_aliado'; 
    protected $primaryKey = 'ADA_ID';
    public $timestamps = false;
    protected $fillable = [
        'ADA_NOMBRE', // Especifica el nombre de la columna en la tabla
        'ADA_APELLIDO',
        'ADA_CORREO',
        'ADA_CONTRASENA',
        'ADA_TELEFONO',
        'ADA_FECHA_CONTRATACION',
        'ROL_ID'
    ];
}
