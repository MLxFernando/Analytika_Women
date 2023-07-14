<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AdminGerente;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminGerentesController extends Component
{
    //definimos unas variables
    public $admingerentes;
    public $ADG_ID;
    public $ADG_NOMBRE;
    public $ADG_APELLIDO;
    public $ADG_CORREO;
    public $ADG_CONTRASENA;
    public $ADG_TELEFONO;
    public $ADG_FECHA_CONTRATACION;
    public $ROL_ID;
    public $roles;

    public $modal = false;

    public function mount()
    {
        $this->roles = DB::table('rol')->pluck('ROL_NOMBRE', 'ROL_ID');
    }

    public function render()
    {
        $this->admingerentes = AdminGerente::all();
        return view('livewire.AdminGerente.index');
    }

    public function pdf()
    {
        $admingerentes = AdminGerente::all();
        $pdf = Pdf::loadView('livewire.AdminGerente.pdf',compact('admingerentes'));
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
        $this -> ADG_ID = null;
        $this -> ADG_NOMBRE = '';
        $this -> ADG_APELLIDO = '';
        $this -> ADG_CORREO = '';
        $this -> ADG_CONTRASENA = '';
        $this -> ADG_TELEFONO = '';
        $this -> ADG_FECHA_CONTRATACION = '';
        $this -> ROL_ID = null;
    }

    public function editar($id)
    {
        $admingerentes = AdminGerente::findOrFail($id);
        $this->ADG_ID = $admingerentes->ADG_ID;
        $this->ADG_NOMBRE = $admingerentes-> ADG_NOMBRE;
        $this->ADG_APELLIDO = $admingerentes-> ADG_APELLIDO;
        $this->ADG_CORREO = $admingerentes-> ADG_CORREO;
        $this->ADG_CONTRASENA = $admingerentes-> ADG_CONTRASENA;
        $this->ADG_TELEFONO = $admingerentes-> ADG_TELEFONO;
        $this->ADG_FECHA_CONTRATACION = $admingerentes-> ADG_FECHA_CONTRATACION;  
        $this->ROL_ID = $admingerentes-> ROL_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        AdminGerente::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        AdminGerente::updateOrCreate(['ADG_ID'=>$this->ADG_ID],
            [
                'ADG_NOMBRE' => $this -> ADG_NOMBRE,
                'ADG_APELLIDO'=>$this -> ADG_APELLIDO,
                'ADG_CORREO'=>$this -> ADG_CORREO,
                'ADG_CONTRASENA'=>$this -> ADG_CONTRASENA,
                'ADG_TELEFONO'=>$this -> ADG_TELEFONO,
                'ADG_FECHA_CONTRATACION'=>$this -> ADG_FECHA_CONTRATACION,
                'ROL_ID'=>$this -> ROL_ID
            ]);
            
            session()->flash('message',
            $this->ADG_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
