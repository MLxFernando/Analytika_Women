<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Servicio;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Component
{
    //definimos unas variables
    public $servicios;
    public $SVC_ID;
    public $SVC_NOMBRE;
    public $SVC_DESCRIPCION;
    public $ALI_ID;
    public $CON_ID;
    public $SVC_VALORACION;
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
        $this->servicios = Servicio::all();
        return view('livewire.Servicio.index');
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
        $this -> SVC_ID = null;
        $this -> SVC_NOMBRE = '';
        $this -> SVC_DESCRIPCION = '';
        $this -> ALI_ID = null;
        $this -> CON_ID = null;
        $this -> SVC_VALORACION = '';
    }

    public function editar($id)
    {
        $servicios = Servicio::findOrFail($id);
        $this->SVC_ID = $servicios->SVC_ID;
        $this->SVC_NOMBRE = $servicios-> SVC_NOMBRE;
        $this->SVC_DESCRIPCION = $servicios-> SVC_DESCRIPCION;
        $this->ALI_ID = $servicios-> ALI_ID;
        $this->CON_ID = $servicios-> CON_ID;
        $this->SVC_VALORACION = $servicios-> SVC_VALORACION;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Servicio::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Servicio::updateOrCreate(['SVC_ID'=>$this->SVC_ID],
            [
                'SVC_NOMBRE' => $this -> SVC_NOMBRE,
                'SVC_DESCRIPCION'=>$this -> SVC_DESCRIPCION,
                'ALI_ID'=>$this -> ALI_ID,
                'CON_ID'=>$this -> CON_ID,
                'SVC_VALORACION'=>$this -> SVC_VALORACION,
            ]);
            
            session()->flash('message',
            $this->SVC_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
