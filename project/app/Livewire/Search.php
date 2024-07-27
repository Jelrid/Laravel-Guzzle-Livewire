<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $searchTerm;
    public $countries;

    
    public function render()
    {
        $response = Http::get('https://api.hh.ru/areas/113');

        if ($response->successful()) {
            $this->countries = json_decode($response->body(), true);  
                 
        } else {
            $this->countries = [];
        }
        
        // dd($this -> countries['areas'][0]);
        return view('livewire.search');
    }
}
