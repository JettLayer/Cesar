<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class AmiiboController extends Controller
{
    public function amiibo(){
        $response = Http::get('https://www.amiiboapi.com/api/amiibo');
        $amiibos = $response->json()['amiibo'];
        return View('amiibo', compact('amiibos'));
    }
}
