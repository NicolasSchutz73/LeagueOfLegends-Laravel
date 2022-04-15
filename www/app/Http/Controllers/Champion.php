<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Champion extends Controller
{
    public function index($name)
    {
        $response = Http::get("http://ddragon.leagueoflegends.com/cdn/12.3.1/data/fr_FR/champion/".$name.".json");
        $data = $response->json();

        return view('pages/champion', [
            'name' => $name,
            'data' => $data['data'],
        ]);
    }

}
