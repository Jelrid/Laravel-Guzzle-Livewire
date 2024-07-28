<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{

    public $countries;
    public $area;


    public function setArea($value = null)
    {
        if (!empty($value)) {
            $this->area = $value;
        } else {
            $this->area = [];
        }
    }


    public function loadCountries()
    {
        $response = Http::get('https://api.hh.ru/areas/113');

        if ($response->successful()) {
            $this->countries = json_decode($response->body(), true);

        } else {
            $this->countries = [];
        }

    }
    public function render()
    {   
        $response = Http::get('https://api.hh.ru/areas/113');

        if ($response->successful()) {
            $this->countries = json_decode($response->body(), true);

        } else {
            $this->countries = [];
        }

        if (!empty($value)) {
            $this->area = $value;
        } else {
            $this->area = [];
        }

        // dd($this -> countries['areas'][0]['areas']);
        return view('livewire.search');
    }
}
