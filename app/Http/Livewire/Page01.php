<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class Page01 extends Component
{
    public Movie $movies;

    public function mount($movies)
    {
        $this->$movies = $movies;
    }
    public function render()
    {
        return view('livewire.page01')->layout('layouts.page');
    }
}
