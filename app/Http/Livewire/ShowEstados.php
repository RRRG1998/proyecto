<?php

namespace App\Http\Livewire;

use App\Models\Estado;
use Livewire\Component;

class ShowEstados extends Component
{
    public $search;
    public function render()
    {
        $estados = Estado::where('nombre_estado', 'like', '%' . $this->search . '%')
                            ->orwhere('codigo_estado', 'like', '%' . $this->search . '%')
                            ->get();
        return view('livewire.show-estados', compact('estados'));
    }
}
