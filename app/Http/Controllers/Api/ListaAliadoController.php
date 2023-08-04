<?php

namespace App\Http\Controllers\Api;
use App\Models\AdminAliados;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListaAliadoController extends Controller
{
    public function index()
    {
        $AdAliado = AdminAliados::all();
        return response()->json($AdAliado);
       // return AdminAliados::all();
    }

}
