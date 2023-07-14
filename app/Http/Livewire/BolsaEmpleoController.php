<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BolsaEmpleo;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class BolsaEmpleoController extends Component
{
    //definimos unas variables
    public $empleos;
    public $BDE_ID;
    public $BDE_NOMBRE;
    public $BDE_DESCRIPCION;
    public $BDE_FECHA_CREACION;
    public $BDE_FECHA_ELIMINACION;
    public $BDE_POSTULANTES;
    public $ALI_ID;
    public $CON_ID;
    public $aliados;
    public $consultores;

    public $modal = false;

    public function mount()
    {
        $this->aliados = DB::table('aliado')->pluck('ALI_NOMBRE', 'ALI_ID');
        $this->consultores = DB::table('consultor')->pluck('CON_NOMBRE', 'CON_ID');
    }

    public function render()
    {
        $this->empleos = BolsaEmpleo::all();
        return view('livewire.BolsaEmpleo.index');
    }
    public function pdf()
    {
        $empleos = BolsaEmpleo::all();
        $pdf = Pdf::loadView('livewire.BolsaEmpleo.pdf',compact('empleos'));
        return $pdf->stream();
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }

    public function cerrarModal() {
        $this->modal = false;
    }

    public function limpiarCampos(){
        $this -> BDE_ID = null;
        $this -> BDE_NOMBRE = '';
        $this -> BDE_DESCRIPCION = '';
        $this -> BDE_FECHA_CREACION = '';
        $this -> BDE_FECHA_ELIMINACION = '';
        $this -> BDE_POSTULANTES = '';
        $this -> ALI_ID = null;
        $this -> CON_ID = null;
    }

    public function editar($id)
    {
        $empleos = BolsaEmpleo::findOrFail($id);
        $this->BDE_ID = $empleos->BDE_ID;
        $this->BDE_NOMBRE = $empleos-> BDE_NOMBRE;
        $this->BDE_DESCRIPCION = $empleos-> BDE_DESCRIPCION;
        $this->BDE_FECHA_CREACION = $empleos-> BDE_FECHA_CREACION;
        $this->BDE_FECHA_ELIMINACION = $empleos-> BDE_FECHA_ELIMINACION;
        $this->BDE_POSTULANTES = $empleos-> BDE_POSTULANTES;
        $this->ALI_ID = $empleos-> ALI_ID;
        $this->CON_ID = $empleos-> CON_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        BolsaEmpleo::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        BolsaEmpleo::updateOrCreate(['BDE_ID'=>$this->BDE_ID],
            [
                'BDE_NOMBRE' => $this -> BDE_NOMBRE,
                'BDE_DESCRIPCION'=>$this -> BDE_DESCRIPCION,
                'BDE_FECHA_CREACION'=>$this -> BDE_FECHA_CREACION,
                'BDE_FECHA_ELIMINACION'=>$this -> BDE_FECHA_ELIMINACION,
                'BDE_POSTULANTES'=>$this -> BDE_POSTULANTES,
                'ALI_ID'=>$this -> ALI_ID,
                'CON_ID' => $this-> CON_ID
            ]);
            
            session()->flash('message',
            $this->BDE_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
