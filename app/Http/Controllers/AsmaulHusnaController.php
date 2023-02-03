<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AsmaulHusnaController extends Controller
{
    public function index()
    {
        $response = Http::get("https://raw.githubusercontent.com/mikqi/dzikir-counter/master/www/asmaul-husna.json");
    // return $response->json();
            return view('asmaul-husna',[
            'response'=>json_decode($response)
        ]);
       
    }
}
