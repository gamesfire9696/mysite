<?php

namespace App\Http\Livewire;

use App\Models\Live;
use Livewire\Component;

class Chanal extends Component
{
    public function render()
    {
        $lives=Live::all();
        return view('livewire.chanal',compact('lives'))->layout('layouts.page');
    }
}
