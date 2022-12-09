<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsuarioController extends Controller
{
    public function obtener(){
        $usuarios = Usuario::all();

        return $usuarios;
    }

    public function mostrar($id, Request $request){
        $usuario = Usuario::find($id);
        if(!$usuario){
            return response([
                "message" => "Error: no se encontro al usuario con el ID ". $id
            ], 200);
        }
        return $usuario;
    }


    public function crear(Request $request){
        $datos = $request->validate([
            "role"=>"required|string",
            "name"=>"required|string",
            "surname"=>"required|string",
            "email"=>"required|email",
            "password"=>"required|min:4",
        ]);
        $usuario = Usuario::create($datos);
        return response([
            'message'=>'Se creo con exito el usuario',
            'id'=>$usuario['id'],
        ], 201);
    }

    public function actualizar($id, Request $request){
        $usuario = Usuario::find($id);
        if(!$usuario){
        return response([
                'message'=> 'Error, no se encontro el usuario'
            ], 404);
        }

        $datos = $request->validate([
            "role"=>"required|string",
            "name"=>"required|string",
            "surname"=>"required|string",
            "email"=>"required|email",
            "password"=>"required|min:4",
        ]);

        $usuario->update($datos);
        return response([
            'message'=>'Se modifico el usuario'
        ]);
    }

    public function eliminar($id, Request $resquest){
        $usuario = Usuario::find($id);
        if(!$usuario){
            return response([
                "message" => "Error: no se encontro al usuario con el ID".$id
            ], 200);
        }
        $usuario -> delete($id);
        return response(["message"=>"Se elimino el usuario"]);
    }
}
