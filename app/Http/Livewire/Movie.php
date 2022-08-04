<?php

namespace App\Http\Livewire;

use App\Models\Click;
use App\Models\Movie as ModelsMovie;
use Livewire\Component;

class Movie extends Component
{
 
     public $search;
     public $movies;

 /*     public function mount()
     { 
         $this->movies = ModelsMovie::all();
     }
 */

    public function render()
    {
       
        
        $this->movies = ModelsMovie::all();
     
        return view('livewire.movie')->layout('layouts.page');
    }
}
