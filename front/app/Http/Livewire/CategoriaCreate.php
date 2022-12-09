<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CategoriaCreate extends Component
{
    public $idCategoria;
    public $datos = [];
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/categorias');
        $categorias = $response->json();
        return view('livewire.categoria-create', compact('categorias'));
    }

    public function crear(){
        $response = Http::withHeaders([
            'Accept'=>'Application/json'
        ])->post('http://127.0.0.1:8000/api/categorias', $this->datos);
        if($response->successful()){
            return redirect('/categorias');
        }
        else{
            dd($response->json());
        }
    }

    public function eliminar($id){
        $this->idCategoria = $id;
        Http::delete('http://127.0.0.1:8000/api/categorias/'. $this->idCategoria);
    }
}
