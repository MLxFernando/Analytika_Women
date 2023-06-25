<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BolsaEmpleo extends Model
{
    use HasFactory;
    protected $table = 'bolsa_empleo'; 
    protected $primaryKey = 'BDE_ID';
    public $timestamps = false;
    protected $fillable = [
        'BDE_NOMBRE', // Especifica el nombre de la columna en la tabla
        'BDE_DESCRIPCION',
        'BDE_FECHA_CREACION',
        'BDE_FECHA_ELIMINACION',
        'BDE_POSTULANTES',
        'ALI_ID',
        'CON_ID'
    ];
}
