<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Charts extends Component
{
    public function render()
    {
        return view('livewire.home.charts')->layout('layouts.home');
    }
}
