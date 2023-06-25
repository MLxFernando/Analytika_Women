<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Postulante;
use Illuminate\Support\Facades\DB;

class PostulantesController extends Component
{
    //definimos unas variables
    public $postulantes;
    public $POS_ID;
    public $POS_NOMBRE;
    public $POS_APELLIDO;
    public $POS_CORREO;
    public $POS_CONTRASENA;
    public $POS_DIRECCION;
    public $POS_FECHA_NACIMIENTO;
    public $POS_EXPERIENCIA;
    public $POS_EMPLEO;
    public $ROL_ID;
    public $roles;

    public $modal = false;

    public function mount()
    {
        $this->roles = DB::table('rol')->pluck('ROL_NOMBRE', 'ROL_ID');
    }

    public function render()
    {
        $this->postulantes = Postulante::all();
        return view('livewire.Postulante.index');
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
        $this -> POS_ID = null;
        $this -> POS_NOMBRE = '';
        $this -> POS_APELLIDO = '';
        $this -> POS_CORREO = '';
        $this -> POS_CONTRASENA = '';
        $this -> POS_DIRECCION = '';
        $this -> POS_FECHA_NACIMIENTO = '';
        $this -> POS_EXPERIENCIA = '';
        $this -> POS_EMPLEO = '';
        $this -> ROL_ID = null;
    }

    public function editar($id)
    {
        $postulantes = Postulante::findOrFail($id);
        $this->POS_ID = $postulantes->POS_ID;
        $this->POS_NOMBRE = $postulantes-> POS_NOMBRE;
        $this->POS_APELLIDO = $postulantes-> POS_APELLIDO;
        $this->POS_CORREO = $postulantes-> POS_CORREO;
        $this->POS_CONTRASENA = $postulantes-> POS_CONTRASENA;
        $this->POS_DIRECCION = $postulantes-> POS_DIRECCION;
        $this->POS_FECHA_NACIMIENTO = $postulantes-> POS_FECHA_NACIMIENTO;
        $this->POS_EXPERIENCIA = $postulantes-> POS_EXPERIENCIA;
        $this->POS_EMPLEO = $postulantes-> POS_EMPLEO;  
        $this->ROL_ID = $postulantes-> ROL_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Postulante::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Postulante::updateOrCreate(['POS_ID'=>$this->POS_ID],
            [
                'POS_NOMBRE' => $this -> POS_NOMBRE,
                'POS_APELLIDO'=>$this -> POS_APELLIDO,
                'POS_CORREO'=>$this -> POS_CORREO,
                'POS_CONTRASENA'=>$this -> POS_CONTRASENA,
                'POS_DIRECCION'=>$this -> POS_DIRECCION,
                'POS_FECHA_NACIMIENTO'=>$this -> POS_FECHA_NACIMIENTO,
                'POS_EXPERIENCIA'=>$this -> POS_EXPERIENCIA,
                'POS_EMPLEO'=>$this -> POS_EMPLEO,
                'ROL_ID'=>$this -> ROL_ID
            ]);
            
            session()->flash('message',
            $this->POS_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
