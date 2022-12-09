<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PeticionMostrar extends Component
{
    public $idPeticion;

    public function mount($id){
        $this->idPeticion= $id;
    }

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/peticiones/'. $this->idPeticion);
        $peticion = $response->json();
        return view('livewire.peticion-mostrar', compact('peticion'));
    }
}
