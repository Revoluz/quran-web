<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    public function index()
    {
        $response = Http::get("https://equran.id/api/surat");
        // return $response->json();
        return view('al-quran',[
            'response'=>json_decode($response)
        ]);
        
        // $response = Http::get("https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json");
        // return $response->json();
//  var_dump(openssl_get_cert_locations());
// var_dump(openssl_get_cert_locations()); die;
// var_dump(php_ini_loaded_file());
            // $response = Http::get('http://example.com');
    // return $response->json();
    // return Http::dd()->get('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');
    // echo "openssl.cafile: ", ini_get('openssl.cafile'), "\n";
// echo "curl.cainfo: ", ini_get('curl.cainfo'), "\n";
    }
        public function indexId($id)
    {
        $response = Http::get("https://equran.id/api/surat/$id");
        return view('surah',[
            'surah'=>json_decode($response)
                ]);
    }
}
