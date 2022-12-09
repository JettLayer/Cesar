<?php

namespace App\Http\Controllers;

use App\Models\Peticion;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PeticionController extends Controller
{
    public function obtener(){
        $peticion = Peticion::all();
        return $peticion;
    }

    public function mostrar($id, Request $request){
        $peticion = Peticion::find($id);
        if(!$peticion){
            return response([
                "message" => "Error: no se encontro la peticion con el ID ". $id
            ], 200);
        }
        return $peticion;
    }

    public function crear(Request $request){
        $datos = $request->validate([
            "id_usuario"=>"required|integer",
            "id_categoria"=>"required|integer",
            "titulo"=>"required|string",
            "contenido"=>"required|string",
            "status"=>"required|string",
        ]);
        $peticion = Peticion::create($datos);
        return response([
            'message'=>'Se creo con exito la peticion',
            'id'=>$peticion['id'],
        ], 201);
    }

    public function actualizar($id, Request $request){
        $peticion = Peticion::find($id);
        if(!$peticion){
        return response([
                'message'=> 'Error, no se encontro la peticion'
            ], 404);
        }

        $datos = $request->validate([
            "id_usuario"=>"integer",
            "id_categoria"=>"integer",
            "titulo"=>"required|string",
            "contenido"=>"required|string",
            "status"=>"required|string",
        ]);

        $peticion->update($datos);
        return response([
            'message'=>'Se modifico la peticion'
        ]);
    }

    public function eliminar($id, Request $resquest){
        $peticion = Peticion::find($id);
        if(!$peticion){
            return response([
                "message" => "Error: no se encontro la peticion con el ID".$id
            ], 200);
        }
        $peticion -> delete($id);
        return response(["message"=>"Se elimino la peticion"]);
    }
}
