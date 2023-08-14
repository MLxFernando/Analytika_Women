<?php

namespace App\Http\Controllers\Api;
use App\Models\Rol;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListaRolController extends Controller
{
    public function index()
    {
        $rol = Rol::all();
        return response()->json($rol);
       
    }
    
}
