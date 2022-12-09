<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserUpdate extends Component
{

    public $datos = [];
    public $idUsuarios;

    public function mount($id){
        $this->idUsuarios = $id;
        $this->datos = Http::get('http://127.0.0.1:8000/api/usuarios/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.user-update');
    }

    public function modificar(){
        $response = Http::withHeaders([
            'Accept'=>'Application/json'
        ])->put('http://127.0.0.1:8000/api/usuarios/' . $this->idUsuarios, $this->datos);
        if($response->successful()){
            return redirect('/usuarios');
        }else{
            dd($response->json());
        }
    }

}
