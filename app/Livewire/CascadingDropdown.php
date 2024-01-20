<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Continent;
use App\Models\Country;

class CascadingDropdown extends Component
{
    public $continents=[];
    public $countries=[];

    public $selectedContinent;
    public $selectedCountry;

    public function mount(){
        $this->continents=Continent::all();
    }

    public function changeContinent(){
        $this->countries=Country::where("id",$this->selectedContinent)->get();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }
}
