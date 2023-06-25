<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;protected $table = 'rol'; 
    protected $primaryKey = 'ROL_ID';
    public $timestamps = false;
    protected $fillable = [
        'ROL_NOMBRE' // Especifica el nombre de la columna en la tabla
        
    ];
}
