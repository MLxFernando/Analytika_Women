<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'evento'; 
    protected $primaryKey = 'EVE_ID';
    public $timestamps = false;
    protected $fillable = [
        'EVE_TITULO', // Especifica el nombre de la columna en la tabla
        'EVE_DESCRIPCION',
        'EVE_UBICACION',
        'EVE_FECHA_EVENTO',
        'EVE_HORA_EVENTO',
        'ALI_ID'
    ];
}
