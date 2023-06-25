<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;

class CursosController extends Component
{
    //definimos unas variables
    public $cursos;
    public $CUR_ID;
    public $CUR_NOMBRE;
    public $CUR_DESCRIPCION;
    public $CON_ID;
    public $CUR_FECHA_INICIO;
    public $CUR_FECHA_FINALIZACION;
    public $CUR_HORARIO;
    public $consultores;

    public $modal = false;

    public function mount()
    {
        $this->consultores = DB::table('consultor')->pluck('CON_NOMBRE', 'CON_ID');
    }

    public function render()
    {
        $this->cursos = Curso::all();
        return view('livewire.Curso.index');
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
        $this -> CUR_ID = null;
        $this -> CUR_NOMBRE = '';
        $this -> CUR_DESCRIPCION = '';
        $this -> CUR_FECHA_INICIO = '';
        $this -> CUR_FECHA_FINALIZACION = '';
        $this -> CUR_HORARIO = '';
        $this -> CON_ID = null;
    }

    public function editar($id)
    {
        $cursos = Curso::findOrFail($id);
        $this->CUR_ID = $cursos->CUR_ID;
        $this->CUR_NOMBRE = $cursos-> CUR_NOMBRE;
        $this->CUR_DESCRIPCION = $cursos-> CUR_DESCRIPCION;
        $this->CUR_FECHA_INICIO = $cursos-> CUR_FECHA_INICIO;
        $this->CUR_FECHA_FINALIZACION = $cursos-> CUR_FECHA_FINALIZACION;
        $this->CUR_HORARIO = $cursos-> CUR_HORARIO;  
        $this->CON_ID = $cursos-> CON_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Curso::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Curso::updateOrCreate(['CUR_ID'=>$this->CUR_ID],
            [
                'CUR_NOMBRE' => $this -> CUR_NOMBRE,
                'CUR_DESCRIPCION'=>$this -> CUR_DESCRIPCION,
                'CUR_FECHA_INICIO'=>$this -> CUR_FECHA_INICIO,
                'CUR_FECHA_FINALIZACION'=>$this -> CUR_FECHA_FINALIZACION,
                'CUR_HORARIO'=>$this -> CUR_HORARIO,
                'CON_ID'=>$this -> CON_ID
            ]);
            
            session()->flash('message',
            $this->CUR_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
