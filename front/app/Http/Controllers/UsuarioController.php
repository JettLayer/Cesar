<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function index(){
        $response = Http::get('http://127.0.0.1:8000/api/usuarios');
        $usuarios = $response->json();
        return View('usuarios', compact('usuarios'));
    }
}
