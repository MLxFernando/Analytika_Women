<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OfertaEmpleo;
use Illuminate\Support\Facades\DB;

class OfertaEmpleoController extends Component
{
    //definimos unas variables
    public $ofertas;
    public $OEM_ID;
    public $OEM_NOMBRE;
    public $OEM_DESCRIPCION;
    public $OEM_UBICACION;
    public $OEM_REQUISITOS;
    public $OEM_SALARIO;
    public $OEM_FECHA_PUBLICACION;
    public $BDE_ID;
    public $empleos;

    public $modal = false;

    public function mount()
    {
        $this->empleos = DB::table('bolsa_empleo')->pluck('BDE_NOMBRE', 'BDE_ID');
    }

    public function render()
    {
        $this->ofertas = OfertaEmpleo::all();
        return view('livewire.OfertaEmpleo.index');
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
        $this -> OEM_ID = null;
        $this -> OEM_NOMBRE = '';
        $this -> OEM_DESCRIPCION = '';
        $this -> OEM_UBICACION = '';
        $this -> OEM_REQUISITOS = '';
        $this -> OEM_SALARIO = '';
        $this -> OEM_FECHA_PUBLICACION = '';
        $this -> BDE_ID = null;
    }

    public function editar($id)
    {
        $ofertas = OfertaEmpleo::findOrFail($id);
        $this->OEM_ID = $ofertas->OEM_ID;
        $this->OEM_NOMBRE = $ofertas-> OEM_NOMBRE;
        $this->OEM_DESCRIPCION = $ofertas-> OEM_DESCRIPCION;
        $this->OEM_UBICACION = $ofertas-> OEM_UBICACION;
        $this->OEM_REQUISITOS = $ofertas-> OEM_REQUISITOS;
        $this->OEM_SALARIO = $ofertas-> OEM_SALARIO;
        $this->OEM_FECHA_PUBLICACION = $ofertas-> OEM_FECHA_PUBLICACION;  
        $this->BDE_ID = $ofertas-> BDE_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        OfertaEmpleo::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        OfertaEmpleo::updateOrCreate(['OEM_ID'=>$this->OEM_ID],
            [
                'OEM_NOMBRE' => $this -> OEM_NOMBRE,
                'OEM_DESCRIPCION'=>$this -> OEM_DESCRIPCION,
                'OEM_UBICACION'=>$this -> OEM_UBICACION,
                'OEM_REQUISITOS'=>$this -> OEM_REQUISITOS,
                'OEM_SALARIO'=>$this -> OEM_SALARIO,
                'OEM_FECHA_PUBLICACION'=>$this -> OEM_FECHA_PUBLICACION,
                'BDE_ID'=>$this -> BDE_ID
            ]);
            
            session()->flash('message',
            $this->OEM_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
