<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicio'; 
    protected $primaryKey = 'SVC_ID';
    public $timestamps = false;
    protected $fillable = [
        'SVC_NOMBRE', // Especifica el nombre de la columna en la tabla
        'SVC_DESCRIPCION',
        'ALI_ID',
        'CON_ID',
        'SVC_VALORACION'
    ];
}
