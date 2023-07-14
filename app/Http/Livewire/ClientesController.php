<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class ClientesController extends Component
{
    //definimos unas variables
    public $clientes;
    public $CLI_ID;
    public $CLI_NOMBRE;
    public $CLI_APELLIDO;
    public $CLI_CORREO;
    public $CLI_CONTRASENA;
    public $CLI_TELEFONO;
    public $CLI_DIRECCION;
    public $CLI_FECHA_REGISTRO;
    public $ROL_ID;
    public $roles;

    public $modal = false;

    public function mount()
    {
        $this->roles = DB::table('rol')->pluck('ROL_NOMBRE', 'ROL_ID');
    }

    public function render()
    {
        $this->clientes = Cliente::all();
        return view('livewire.Cliente.index');
    }

    public function pdf()
    {
        $clientes = Cliente::all();
        $pdf = Pdf::loadView('livewire.Cliente.pdf',compact('clientes'));
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
        $this -> CLI_ID = null;
        $this -> CLI_NOMBRE = '';
        $this -> CLI_APELLIDO = '';
        $this -> CLI_CORREO = '';
        $this -> CLI_CONTRASENA = '';
        $this -> CLI_TELEFONO = '';
        $this -> CLI_DIRECCION = '';
        $this -> CLI_FECHA_REGISTRO = '';
        $this -> ROL_ID = null;
    }

    public function editar($id)
    {
        $clientes = Cliente::findOrFail($id);
        $this->CLI_ID = $clientes->CLI_ID;
        $this->CLI_NOMBRE = $clientes-> CLI_NOMBRE;
        $this->CLI_APELLIDO = $clientes-> CLI_APELLIDO;
        $this->CLI_CORREO = $clientes-> CLI_CORREO;
        $this->CLI_CONTRASENA = $clientes-> CLI_CONTRASENA;
        $this->CLI_TELEFONO = $clientes-> CLI_TELEFONO;
        $this->CLI_DIRECCION = $clientes-> CLI_DIRECCION;
        $this->CLI_FECHA_REGISTRO = $clientes-> CLI_FECHA_REGISTRO;
        $this->ROL_ID = $clientes-> ROL_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Cliente::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Cliente::updateOrCreate(['CLI_ID'=>$this->CLI_ID],
            [
                'CLI_NOMBRE' => $this -> CLI_NOMBRE,
                'CLI_APELLIDO'=>$this -> CLI_APELLIDO,
                'CLI_CORREO'=>$this -> CLI_CORREO,
                'CLI_CONTRASENA'=>$this -> CLI_CONTRASENA,
                'CLI_TELEFONO'=>$this -> CLI_TELEFONO,
                'CLI_DIRECCION'=>$this -> CLI_DIRECCION,
                'CLI_FECHA_REGISTRO'=>$this -> CLI_FECHA_REGISTRO,
                'ROL_ID'=>$this -> ROL_ID
            ]);
            
            session()->flash('message',
            $this->CLI_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
