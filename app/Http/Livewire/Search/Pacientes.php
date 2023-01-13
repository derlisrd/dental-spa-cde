<?php

namespace App\Http\Livewire\Search;

use App\Models\Paciente;
use Livewire\Component;

class Pacientes extends Component
{


    public $showdiv = false;
    public $pacientes;
    public $doc;
    public $nombre_completo;
    public $search;
    public $paciente_id;
    public $selected;

    public function SelectPaciente($id = 0){

        $record = Paciente::find($id);
        $this->paciente_id = $record->id;
        $this->doc = $record->doc;
        $this->selected = $record->nombre;
        $this->nombre_completo = $record->nombre . ' ' .$record->apellido;
        $this->showdiv = false;
        $this->search = "";
    }


    public function SearchResult(){
        if(!empty($this->search)){
            $searchTerm = '%'.$this->search.'%';
            $this->pacientes = Paciente::orderBy('nombre','asc')
            ->where('nombre','like',$searchTerm)
            ->orWhere('doc','like',$searchTerm)->offset(0)->limit(10)
            ->get();
            $this->showdiv = true;
        }
        else{
            $this->showdiv = false;
        }
    }

    public function render()
    {
        return view('livewire.search.pacientes');
    }
}
