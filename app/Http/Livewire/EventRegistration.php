<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventRegistration extends Component
{
    public $school1 = "";
    public $filtro = [];
    public $eRegistions;

    public function render()
    {
        if (strlen($this->school1) > 1 ) {

            $d = \App\Models\eventRegistration::where($this->filtro)
                ->pluck("id")->toArray();

            $dados['schools'] = \App\Models\eventRegistration::whereIn("id", $d)
                ->orderby("description", "asc")
                ->get();

        }else {
            $this->eRegistions = \App\Models\eventRegistration::all();
        }


        return view('livewire.event-registration');
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function setFiltros()
    {
        $lista = [];

        if($this->school1 != ''){
            array_push($lista,["schools.name","like",'%'.$this->school1.'%']);
        }

        $this->filtro = $lista;

    }
}
