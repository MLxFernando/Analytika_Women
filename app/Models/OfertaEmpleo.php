<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfertaEmpleo extends Model
{
    use HasFactory;
    protected $table = 'oferta_empleo'; 
    protected $primaryKey = 'OEM_ID';
    public $timestamps = false;
    protected $fillable = [
        'OEM_NOMBRE', // Especifica el nombre de la columna en la tabla
        'OEM_DESCRIPCION',
        'OEM_UBICACION',
        'OEM_REQUISITOS',
        'OEM_SALARIO',
        'OEM_FECHA_PUBLICACION',
        'BDE_ID'
    ];
}
