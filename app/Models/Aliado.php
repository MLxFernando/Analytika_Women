<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    use HasFactory;
    protected $table = 'aliado'; 
    protected $primaryKey = 'ALI_ID';
    public $timestamps = false;
    protected $fillable = [
        'ALI_NOMBRE', // Especifica el nombre de la columna en la tabla
        'ALI_APELLIDO',
        'ALI_CORREO',
        'ALI_CONTRASENA',
        'ALI_TELEFONO',
        'ALI_DIRECCION',
        'ALI_DESCRIPCION',
        'ALI_EXPERIENCIA',
        'ALI_SERVICIOS',
        'ROL_ID',
        'CLI_ID'
    ];
}
