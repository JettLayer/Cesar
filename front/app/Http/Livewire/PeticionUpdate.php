<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PeticionUpdate extends Component
{

    public $datos = [];
    public $idPeticion;

    public function mount($id){
        $this->idPeticion = $id;
        $this->datos = Http::get('http://127.0.0.1:8000/api/peticiones/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.peticion-update');
    }

    public function modificar(){
        $response = Http::withHeaders([
            'Accept'=>'Application/json'
        ])->put('http://127.0.0.1:8000/api/peticiones/' . $this->idPeticion, $this->datos);
        if($response->successful()){
            return redirect('/peticiones');
        }else{
            dd($response->json());
        }
    }

}
