<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminGerente extends Model
{
    use HasFactory;
    protected $table = 'admin_gerente'; 
    protected $primaryKey = 'ADG_ID';
    public $timestamps = false;
    protected $fillable = [
        'ADG_NOMBRE', // Especifica el nombre de la columna en la tabla
        'ADG_APELLIDO',
        'ADG_CORREO',
        'ADG_CONTRASENA',
        'ADG_TELEFONO',
        'ADG_FECHA_CONTRATACION',
        'ROL_ID'
    ];
}
