<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AdminGerente;
use Illuminate\Http\Request;

class Registro1Controller extends Controller
{
    public function index()
    {
        $AdGerente = AdminGerente::all();
        return response()->json($AdGerente);
       
    }

}
