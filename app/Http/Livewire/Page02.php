<?php

namespace App\Http\Livewire;

use App\Models\Live;
use Livewire\Component;

class Page02 extends Component
{
    public Live $chanals;

    public function mount($chanals)
    {
        $this->$chanals = $chanals;
    }

    public function render()
    {
        return view('livewire.page02')->layout('layouts.page');
    }
}
