<?php

namespace App\Http\Livewire\Search;

use App\Models\Servicio;
use Livewire\Component;

class Servicios extends Component
{

    public $showdiv = false;
    public $servicios;
    public $codigo;
    public $search;
    public $precio;
    public $servicio_id;
    public $selected;

    public function SelectServicio($id = 0){

        $record = Servicio::find($id);
        $this->servicio_id = $record->id;
        $this->codigo = $record->codigo;
        $this->selected = $record->descripcion;
        $this->precio = $record->precio;
        $this->showdiv = false;
        $this->search = "";
    }


    public function SearchResult(){
        if(!empty($this->search)){
            $searchTerm = '%'.$this->search.'%';
            $this->servicios = Servicio::orderBy('descripcion','asc')
            ->where('descripcion','like',$searchTerm)
            ->orWhere('codigo','like',$searchTerm)->offset(0)->limit(10)
            ->get();
            $this->showdiv = true;
        }
        else{
            $this->showdiv = false;
        }
    }

    public function render()
    {
        return view('livewire.search.servicios');
    }
}
