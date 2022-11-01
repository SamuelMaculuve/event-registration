<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventRegistration extends Component
{
    public $estado = "";
    public $company_name = "";
    public $filtro = [];
    public $factura = "";
    public $mes = "";
    public $nome = "";

    public function render()
    {

        $d  = \App\Models\eventRegistration::
            where('payment_state','=',0)
            ->where($this->filtro)
            ->pluck("id")->toArray();
//        dd($d);
        $dados['eventRegistions'] =
            \App\Models\eventRegistration::whereIn("id",array(2))
                ->orderby('id','asc')->paginate(25);

//        dd($dados);

        return view('livewire.event-registration',$dados);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function setFiltros()
    {

        $lista = [];

        if($this->company_name != ''){
            array_push($lista,["event_registrations.company_name","like",'%'.$this->company_name.'%']);
        }

        $this->filtro = $lista;

    }
}
