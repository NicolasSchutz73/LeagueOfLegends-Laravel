<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Home extends Controller
{
    public function index()
    {
        $response = Http::get("http://ddragon.leagueoflegends.com/cdn/12.3.1/data/fr_FR/champion.json");
        $data = $response->json();

        return view('pages/home', [
            'data' => $data
        ]);
    }

}
