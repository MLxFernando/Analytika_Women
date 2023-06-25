<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'curso'; 
    protected $primaryKey = 'CUR_ID';
    public $timestamps = false;
    protected $fillable = [
        'CUR_NOMBRE', // Especifica el nombre de la columna en la tabla
        'CUR_DESCRIPCION',
        'CON_ID',
        'CUR_FECHA_INICIO',
        'CUR_FECHA_FINALIZACION',
        'CUR_HORARIO'
    ];
}
