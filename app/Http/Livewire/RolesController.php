<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Rol;

class RolesController extends Component
{
    //definimos unas variables
    public $roles;
    public $ROL_ID;
    public $ROL_NOMBRE;

    public $modal = false;

    public function render()
    {
        $this->roles = Rol::all();
        return view('livewire.Rol.index');
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
        $this -> ROL_ID = null;
        $this -> ROL_NOMBRE = '';
    }

    public function editar($id)
    {
        $roles = Rol::findOrFail($id);
        $this->ROL_ID = $roles->ROL_ID;
        $this->ROL_NOMBRE = $roles-> ROL_NOMBRE;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Rol::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Rol::updateOrCreate(['ROL_ID'=>$this->ROL_ID],
            [
                'ROL_NOMBRE' => $this -> ROL_NOMBRE,
            ]);
            
            session()->flash('message',
            $this->ROL_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
