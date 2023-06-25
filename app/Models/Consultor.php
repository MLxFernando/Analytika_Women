<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultor extends Model
{
    use HasFactory;
    protected $table = 'consultor'; 
    protected $primaryKey = 'CON_ID';
    public $timestamps = false;
    protected $fillable = [
        'CON_NOMBRE', // Especifica el nombre de la columna en la tabla
        'CON_DIRECCION',
        'CON_EMPRESA',
        'CON_GENERO',
        'CON_FECHA_NACIMIENTO',
        'CON_MISION',
        'CON_VISION',
        'CON_SERVICIOS',
        'ROL_ID',
        'ALI_ID'
    ];
}
