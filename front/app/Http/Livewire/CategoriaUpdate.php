<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CategoriaUpdate extends Component
{

    public $datos = [];
    public $idCategoria;

    public function mount($id){
        $this->idCategoria = $id;
        $this->datos = Http::get('http://127.0.0.1:8000/api/categorias/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.categoria-update');
    }

    public function modificar(){
        $response = Http::withHeaders([
            'Accept'=>'Application/json'
        ])->put('http://127.0.0.1:8000/api/categorias/' . $this->idCategoria, $this->datos);
        if($response->successful()){
            return redirect('/categorias');
        }else{
            dd($response->json());
        }
    }

}
