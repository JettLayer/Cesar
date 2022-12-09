<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CategoriaMostrar extends Component
{
    public $idCategoria;

    public function mount($id){
        $this->idCategoria = $id;
    }

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/categorias/'. $this->idCategoria);
        $categoria = $response->json();
        return view('livewire.categoria-mostrar', compact('categoria'));
    }
}
