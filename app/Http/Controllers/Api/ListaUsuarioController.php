<?php

namespace App\Http\Controllers\Api;
use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListaUsuarioController extends Controller
{
    public function index()
    {
        $clienteApi = Cliente::all();
        return response()->json($clienteApi);
       
    }
    
}
