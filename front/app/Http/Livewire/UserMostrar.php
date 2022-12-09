<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserMostrar extends Component
{
    public $idUsuario;

    public function mount($id){
        $this->idUsuario = $id;
    }

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/usuarios/'. $this->idUsuario);
        $usuario = $response->json();
        return view('livewire.user-mostrar', compact('usuario'));
    }
}
