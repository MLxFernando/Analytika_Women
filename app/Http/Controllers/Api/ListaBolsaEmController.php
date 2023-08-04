<?php

namespace App\Http\Controllers\Api;
use App\Models\BolsaEmpleo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListaBolsaEmController extends Controller
{
    public function index()
    {
        $BolsaEmApi = BolsaEmpleo::all();
        return response()->json($BolsaEmApi);

    }
}
