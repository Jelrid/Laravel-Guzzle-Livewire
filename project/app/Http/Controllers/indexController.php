<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.hh.ru/areas/113');

        $body = $response->getBody();
        $content = $body->getContents();
        
        
        return view('index', ['contets' => $content]);
    }
}
