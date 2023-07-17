<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AdminAliados;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class AdminAliadosController extends Component
{
    //definimos unas variables
    public $adminaliados;
    public $ADA_ID;
    public $ADA_NOMBRE;
    public $ADA_APELLIDO;
    public $ADA_CORREO;
    public $ADA_CONTRASENA;
    public $ADA_TELEFONO;
    public $ADA_FECHA_CONTRATACION;
    public $ROL_ID;
    public $roles;

    public $modal = false;

    public function mount()
    {
        $this->roles = DB::table('rol')->pluck('ROL_NOMBRE', 'ROL_ID');
    }

    public function render()
    {
        $this->adminaliados = AdminAliados::all();
        return view('livewire.AdminAliados.index');
    }
    public function pdf()
    {
        $adminaliados = AdminAliados::all();
        $pdf = Pdf::loadView('livewire.AdminAliados.pdf',compact('adminaliados'));
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
        $this -> ADA_ID = null;
        $this -> ADA_NOMBRE = '';
        $this -> ADA_APELLIDO = '';
        $this -> ADA_CORREO = '';
        $this -> ADA_CONTRASENA = '';
        $this -> ADA_TELEFONO = '';
        $this -> ADA_FECHA_CONTRATACION = '';
        $this -> ROL_ID = null;
    }

    public function editar($id)
    {
        $adminaliados = AdminAliados::findOrFail($id);
        $this->ADA_ID = $adminaliados->ADA_ID;
        $this->ADA_NOMBRE = $adminaliados-> ADA_NOMBRE;
        $this->ADA_APELLIDO = $adminaliados-> ADA_APELLIDO;
        $this->ADA_CORREO = $adminaliados-> ADA_CORREO;
        $this->ADA_CONTRASENA = $adminaliados-> ADA_CONTRASENA;
        $this->ADA_TELEFONO = $adminaliados-> ADA_TELEFONO;
        $this->ADA_FECHA_CONTRATACION = $adminaliados-> ADA_FECHA_CONTRATACION;  
        $this->ROL_ID = $adminaliados-> ROL_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        AdminAliados::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        AdminAliados::updateOrCreate(['ADA_ID'=>$this->ADA_ID],
            [
                'ADA_NOMBRE' => $this -> ADA_NOMBRE,
                'ADA_APELLIDO'=>$this -> ADA_APELLIDO,
                'ADA_CORREO'=>$this -> ADA_CORREO,
                'ADA_CONTRASENA'=>$this -> ADA_CONTRASENA,
                'ADA_TELEFONO'=>$this -> ADA_TELEFONO,
                'ADA_FECHA_CONTRATACION'=>$this -> ADA_FECHA_CONTRATACION,
                'ROL_ID'=>$this -> ROL_ID
            ]);
            
            session()->flash('message',
            $this->ADA_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
