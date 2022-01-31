<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LeagueOfLegendsController extends Controller
{
    public function index($name)
    {
        $reponse = Http::get("http://ddragon.leagueoflegends.com/cdn/12.2.1/data/fr_FR/champion/".$name.".json");
        $data = $reponse->json();
        dd($data);
    }
}
