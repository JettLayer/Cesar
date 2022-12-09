<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoriaController extends Controller
{
    public function obtener(){
        $categoria = Categoria::all();

        return $categoria;
    }

    public function mostrar($id, Request $request){
        $categoria = Categoria::find($id);
        if(!$categoria){
            return response([
                "message" => "Error: no se encontro la categoria con el ID ". $id
            ], 200);
        }
        return $categoria;
    }

    public function crear(Request $request){
        $datos = $request->validate([
            "name"=>"required|string",
            "descripcion"=>"required|string",
        ]);
        $categoria = Categoria::create($datos);
        return response([
            'message'=>'Se creo con exito la categoria',
            'id'=>$categoria['id'],
        ], 201);
    }

    public function actualizar($id, Request $request){
        $categoria = Categoria::find($id);
        if(!$categoria){
        return response([
                'message'=> 'Error, no se encontro la categoria'
            ], 404);
        }

        $datos = $request->validate([
            "name"=>"required|string",
            "descripcion"=>"required|string",
        ]);

        $categoria->update($datos);
        return response([
            'message'=>'Se modifico la cateogira'
        ]);
    }

    public function eliminar($id, Request $resquest){
        $categoria = Categoria::find($id);
        if(!$categoria){
            return response([
                "message" => "Error: no se encontro la categoria con el ID".$id
            ], 200);
        }
        $categoria -> delete($id);
        return response(["message"=>"Se elimino la categoria"]);
    }
}
