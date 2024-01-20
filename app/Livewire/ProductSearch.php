<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;
     public string $search="";
     protected $queryString=['search'];

    public function render()
    {
         $query=Product::query();
         if($this->search){
            $query->where("title","like","%{$this->search}%")
            ->orWhere("description","like","%{$this->search}%");
         }

        return view('livewire.product-search',['products'=>$query->paginate(20)]);
    }

    public function updated($propery){
        if($propery == "search"){
            $this->resetPage();
        }
    }
}
