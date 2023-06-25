<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class EventosController extends Component
{
    //definimos unas variables
    public $eventos;
    public $EVE_ID;
    public $EVE_TITULO;
    public $EVE_DESCRIPCION;
    public $EVE_UBICACION;
    public $EVE_FECHA_EVENTO;
    public $EVE_HORA_EVENTO;
    public $ALI_ID;
    public $aliados;

    public $modal = false;

    public function mount()
    {
        $this->aliados = DB::table('aliado')->pluck('ALI_NOMBRE', 'ALI_ID');
    }

    public function render()
    {
        $this->eventos = Evento::all();
        return view('livewire.Evento.index');
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
        $this -> EVE_ID = null;
        $this -> EVE_TITULO = '';
        $this -> EVE_DESCRIPCION = '';
        $this -> EVE_UBICACION = '';
        $this -> EVE_FECHA_EVENTO = '';
        $this -> EVE_HORA_EVENTO = '';
        $this -> ALI_ID = null;
    }

    public function editar($id)
    {
        $eventos = Evento::findOrFail($id);
        $this->EVE_ID = $eventos->EVE_ID;
        $this->EVE_TITULO = $eventos-> EVE_TITULO;
        $this->EVE_DESCRIPCION = $eventos-> EVE_DESCRIPCION;
        $this->EVE_UBICACION = $eventos-> EVE_UBICACION;
        $this->EVE_FECHA_EVENTO = $eventos-> EVE_FECHA_EVENTO;
        $this->EVE_HORA_EVENTO = $eventos-> EVE_HORA_EVENTO;
        $this->ALI_ID = $eventos-> ALI_ID;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Evento::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Evento::updateOrCreate(['EVE_ID'=>$this->EVE_ID],
            [
                'EVE_TITULO' => $this -> EVE_TITULO,
                'EVE_DESCRIPCION'=>$this -> EVE_DESCRIPCION,
                'EVE_UBICACION'=>$this -> EVE_UBICACION,
                'EVE_FECHA_EVENTO'=>$this -> EVE_FECHA_EVENTO,
                'EVE_HORA_EVENTO'=>$this -> EVE_HORA_EVENTO,
                'ALI_ID'=>$this -> ALI_ID
            ]);
            
            session()->flash('message',
            $this->EVE_ID ? '¡Actualización exitosa!' : '¡Creado Exitosamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
