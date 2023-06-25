<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cupos;
use Illuminate\Support\Facades\DB;


class CuposController extends Component
{
    //definimos unas variables
    public $cupos;
    public $CUP_ID;
    public $CUR_ID;
    public $CUP_CAPACIDAD;
    public $CUP_DISPONIBILIDAD;
    public $cursos;

    public $modal = false;

    public function mount()
    {
        $this->cursos = DB::table('curso')->pluck('CUR_NOMBRE', 'CUR_ID');
    }

    public function render()
    {
        $this->cupos = Cupos::all();
        return view('livewire.Cupo.index');
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
        $this -> CUP_ID = null;
        $this -> CUP_CAPACIDAD = '';
        $this -> CUP_DISPONIBILIDAD = '';
        $this -> CUR_ID = null;
    }

    public function editar($id)
    {
        $cupos = Cupos::findOrFail($id);
        $this->CUP_ID = $cupos->CUP_ID;
        $this->CUR_CAPACIDAD = $cupos-> CUP_CAPACIDAD;
        $this->CUP_DISPONIBILIDAD = $cupos-> CUP_DISPONIBILIDAD;
        $this->CUR_ID = $cupos-> CUR_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Cupos::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Cupos::updateOrCreate(['CUP_ID'=>$this->CUP_ID],
            [
                'CUP_CAPACIDAD' => $this -> CUP_CAPACIDAD,
                'CUP_DISPONIBILIDAD'=>$this -> CUP_DISPONIBILIDAD,
                'CUR_ID' => $this-> CUR_ID
            ]);
            
            session()->flash('message',
            $this->CUP_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
