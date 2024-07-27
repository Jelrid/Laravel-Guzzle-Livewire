<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DebugController extends Controller
{
        public function index(Request $request)
        {
            $client = new Client();
            $response = $client->request('GET', 'https://api.hh.ru/areas/113/' );
            
            $body = $response->getBody();
            $content = $body->getContents();
            $dlyDD = json_decode($body, true);
            dd($dlyDD);
        }
}
