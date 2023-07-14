<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Aliado;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class AliadosController extends Component
{
    //definimos unas variables
    public $aliados;
    public $ALI_ID;
    public $ALI_NOMBRE;
    public $ALI_APELLIDO;
    public $ALI_CORREO;
    public $ALI_CONTRASENA;
    public $ALI_TELEFONO;
    public $ALI_DIRECCION;
    public $ALI_DESCRIPCION;
    public $ALI_EXPERIENCIA;
    public $ALI_SERVICIOS;
    public $ROL_ID;
    public $CLI_ID;
    public $roles;
    public $clientes;

    public $modal = false;

    public function mount()
    {
        $this->roles = DB::table('rol')->pluck('ROL_NOMBRE', 'ROL_ID');
        $this->clientes = DB::table('cliente')->pluck('CLI_NOMBRE', 'CLI_ID');
    }

    public function render()
    {
        $this->aliados = Aliado::all();
        return view('livewire.Aliado.index');
    }

    public function pdf()
    {
        $aliados =Aliado::all();
        $pdf = Pdf::loadView('livewire.Aliado.pdf',compact('aliados'));
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
        $this -> ALI_ID = null;
        $this -> ALI_NOMBRE = '';
        $this -> ALI_APELLIDO = '';
        $this -> ALI_CORREO = '';
        $this -> ALI_CONTRASENA = '';
        $this -> ALI_TELEFONO = '';
        $this -> ALI_DIRECCION = '';
        $this -> ALI_DESCRIPCION = '';
        $this -> ALI_EXPERIENCIA = '';
        $this -> ALI_SERVICIOS = '';
        $this -> ROL_ID = null;
        $this -> CLI_ID = null;
    }

    public function editar($id)
    {
        $aliados = Aliado::findOrFail($id);
        $this->ALI_ID = $aliados->ALI_ID;
        $this->ALI_NOMBRE = $aliados-> ALI_NOMBRE;
        $this->ALI_APELLIDO = $aliados-> ALI_APELLIDO;
        $this->ALI_CORREO = $aliados-> ALI_CORREO;
        $this->ALI_CONTRASENA = $aliados-> ALI_CONTRASENA;
        $this->ALI_TELEFONO = $aliados-> ALI_TELEFONO;
        $this->ALI_DIRECCION = $aliados-> ALI_DIRECCION;
        $this->ALI_DESCRIPCION = $aliados-> ALI_DESCRIPCION;
        $this->ALI_EXPERIENCIA = $aliados-> ALI_EXPERIENCIA;
        $this->ALI_SERVICIOS = $aliados-> ALI_SERVICIOS;
        $this->ROL_ID = $aliados-> ROL_ID;
        $this->CLI_ID = $aliados-> CLI_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Aliado::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Aliado::updateOrCreate(['ALI_ID'=>$this->ALI_ID],
            [
                'ALI_NOMBRE' => $this -> ALI_NOMBRE,
                'ALI_APELLIDO'=>$this -> ALI_APELLIDO,
                'ALI_CORREO'=>$this -> ALI_CORREO,
                'ALI_CONTRASENA'=>$this -> ALI_CONTRASENA,
                'ALI_TELEFONO'=>$this -> ALI_TELEFONO,
                'ALI_DIRECCION'=>$this -> ALI_DIRECCION,
                'ALI_DESCRIPCION'=>$this -> ALI_DESCRIPCION,
                'ALI_EXPERIENCIA'=>$this -> ALI_EXPERIENCIA,
                'ALI_SERVICIOS'=>$this -> ALI_SERVICIOS,
                'ROL_ID'=>$this -> ROL_ID,
                'CLI_ID' => $this-> CLI_ID
            ]);
            
            session()->flash('message',
            $this->ALI_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
