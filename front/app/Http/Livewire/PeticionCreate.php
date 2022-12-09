<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PeticionCreate extends Component
{
    public $idPeticion;
    public $datos = [];
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/peticiones');
        $peticiones = $response->json();
        return view('livewire.peticion-create', compact('peticiones'));
    }

    public function crear(){
        $response = Http::withHeaders([
            'Accept'=>'Application/json'
        ])->post('http://127.0.0.1:8000/api/peticiones', $this->datos);
        if($response->successful()){
            return redirect('/peticiones');
        }
        else{
            dd($response->json());
        }
    }

    public function eliminar($id){
        $this->idPeticion = $id;
        Http::delete('http://127.0.0.1:8000/api/peticiones/'. $this->idPeticion);
    }
}
