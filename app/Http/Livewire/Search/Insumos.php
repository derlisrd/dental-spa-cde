<?php

namespace App\Http\Livewire\Search;

use App\Models\Insumo;
use Livewire\Component;

class Insumos extends Component
{
    public $search;
    public $insumos;
    public $id ;
    public $codigo = '';
    public $selected = '';
    public $showdiv = false;
    public $medida = '';

    public $arrayInsumos = [];

    public function SelectInsumo($id = 0){

        $record = Insumo::select('*')
                    ->where('id',$id)
                    ->first();
        $this->codigo = $record->codigo;
        $this->medida = $record->medida;
        $this->search = $record->id;
        $this->id = $record->id;
        $this->selected = $record->nombre;
        $this->showdiv = false;
    }

    public function Agregar(){



    }


    public function SearchResult(){
        if(!empty($this->search)){
            $searchTerm = '%'.$this->search.'%';
            $this->insumos = Insumo::orderBy('nombre','asc')->where('nombre','like',$searchTerm)->get();
            $this->showdiv = true;
        }
        else{
            $this->showdiv = false;
        }
    }


    public function render()
    {
        return view('livewire..search.insumos');
    }
}
