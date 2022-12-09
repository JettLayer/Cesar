<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserCreate extends Component
{
    public $idUsuario;
    public $datos = [];
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/usuarios');
        $usuarios = $response->json();
        return view('livewire.user-create', compact('usuarios'));
    }

    public function crear(){
        $response = Http::withHeaders([
            'Accept'=>'Application/json'
        ])->post('http://127.0.0.1:8000/api/usuarios', $this->datos);
        if($response->successful()){
            return redirect('/usuarios');
        }
        else{
            dd($response->json());
        }
    }

    public function eliminar($id){
        $this->idUsuario = $id;
        Http::delete('http://127.0.0.1:8000/api/usuarios/'. $this->idUsuario);
    }
}
