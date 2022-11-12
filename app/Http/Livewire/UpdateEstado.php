<?php

namespace App\Http\Livewire;

use App\Models\Estado;
use Livewire\Component;

class UpdateEstado extends Component
{
    public $estado;

    public function mount(Estado $estado){
        $this->estado = $estado;
    }

    public function render()
    {
        return view('livewire.update-estado');
    }
}
