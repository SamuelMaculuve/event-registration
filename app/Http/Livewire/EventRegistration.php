<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventRegistration extends Component
{
    public $eRegistions;

    public function render()
    {
        $this->eRegistions = \App\Models\eventRegistration::all();
        return view('livewire.event-registration');
    }
}
