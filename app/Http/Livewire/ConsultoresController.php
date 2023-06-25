<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Consultor;
use Illuminate\Support\Facades\DB;

class ConsultoresController extends Component
{
    //definimos unas variables
    public $consultores;
    public $CON_ID;
    public $CON_NOMBRE;
    public $CON_DIRECCION;
    public $CON_EMPRESA;
    public $CON_GENERO;
    public $CON_FECHA_NACIMIENTO;
    public $CON_MISION;
    public $CON_VISION;
    public $CON_SERVICIOS;
    public $ROL_ID;
    public $ALI_ID;
    public $roles;
    public $aliados;

    public $modal = false;

    public function mount()
    {
        $this->roles = DB::table('rol')->pluck('ROL_NOMBRE', 'ROL_ID');
        $this->consultores = DB::table('aliado')->pluck('ALI_NOMBRE', 'ALI_ID');
    }

    public function render()
    {
        $this->consultores = Consultor::all();
        return view('livewire.Consultor.index');
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
        $this -> CON_ID = null;
        $this -> CON_NOMBRE = '';
        $this -> CON_DIRECCION = '';
        $this -> CON_EMPRESA = '';
        $this -> CON_GENERO = '';
        $this -> CON_FECHA_NACIMIENTO = '';
        $this -> CON_MISION = '';
        $this -> CON_VISION = '';
        $this -> CON_SERVICIOS = '';
        $this -> ROL_ID = null;
        $this -> ALI_ID = null;
    }

    public function editar($id)
    {
        $consultores = Consultor::findOrFail($id);
        $this->CON_ID = $consultores->CON_ID;
        $this->CON_NOMBRE = $consultores-> CON_NOMBRE;
        $this->CON_DIRECCION = $consultores-> CON_DIRECCION;
        $this->CON_EMPRESA = $consultores-> CON_EMPRESA;
        $this->CON_GENERO = $consultores-> CON_GENERO;
        $this->CON_FECHA_NACIMIENTO = $consultores-> CON_FECHA_NACIMIENTO;
        $this->CON_MISION = $consultores-> CON_MISION;
        $this->CON_VISION = $consultores-> CON_VISION;
        $this->CON_SERVICIOS = $consultores-> CON_SERVICIOS;
        $this->ROL_ID = $consultores-> ROL_ID;
        $this->ALI_ID = $consultores-> ALI_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Consultor::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Consultor::updateOrCreate(['CON_ID'=>$this->CON_ID],
            [
                'CON_NOMBRE' => $this -> CON_NOMBRE,
                'CON_DIRECCION'=>$this -> CON_DIRECCION,
                'CON_EMPRESA'=>$this -> CON_EMPRESA,
                'CON_GENERO'=>$this -> CON_GENERO,
                'CON_FECHA_NACIMIENTO'=>$this -> CON_FECHA_NACIMIENTO,
                'CON_MISION'=>$this -> CON_MISION,
                'CON_VISION'=>$this -> CON_VISION,
                'CON_SERVICIOS'=>$this -> CON_SERVICIOS,
                'ROL_ID'=>$this -> ROL_ID,
                'ALI_ID' => $this-> ALI_ID
            ]);
            
            session()->flash('message',
            $this->CON_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
