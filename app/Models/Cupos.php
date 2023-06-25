<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupos extends Model
{
    use HasFactory;
    protected $table = 'cupo'; 
    protected $primaryKey = 'CUP_ID';
    public $timestamps = false;
    protected $fillable = [
        'CUR_ID', // Especifica el nombre de la columna en la tabla
        'CUP_CAPACIDAD',
        'CUP_DISPONIBILIDAD'
    ];
}
