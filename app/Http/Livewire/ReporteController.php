<?php
namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
class ReporteController extends Component
{
    public function index(){
        return view('livewire.Reporte.index');
    }
}