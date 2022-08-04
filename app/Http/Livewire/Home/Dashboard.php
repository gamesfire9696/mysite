<?php

namespace App\Http\Livewire\Home;

use App\Models\Live;
use App\Models\Movie;
use Livewire\Component;
use App\Imports\LiveImport;
use App\Imports\MovieImport;
use App\Models\Click;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class Dashboard extends Component
{
    use WithFileUploads;

    public $movies='';
    public $lives='';
    public $number01,$number02;

   /*  public function mount()
    {
        $click01=Click::find(1);
        $click02=Click::find(2);
        $this->number01 = $click01->number_click;
        $this->number02 = $click02->number_click;
    } */

    public function show_number01()
    {
        $click01=Click::find(1);
        $click01->number_click=$click01->number_click+1;
        $click01->update();
        
        $this->number01= $click01->number_click;
    }
    public function show_number02()
    {
        $click02=Click::find(2);
        $click02->number_click=$click02->number_click+1;
        $click02->update();
        
        $this->number02= $click02->number_click;
    }

    public function save_movies()
    {
        $this->validate([
            'movies' => 'required|mimes:xls,xlsx',
        ]);
        Movie::query()->truncate();
        Excel::import(new MovieImport,$this->movies);
        session()->flash('message_movies', 'Movies List is successfully updated.');
    }

    public function save_lives()
    {
        $this->validate([
            'lives' => 'required|mimes:xls,xlsx',
        ]);
        Live::query()->truncate();
        Excel::import(new LiveImport,$this->lives);
        session()->flash('message_lives', 'Lives List is successfully updated.');
    }

    public function render()
    {
      
        return view('livewire.home.dashboard')->layout('layouts.home');
    }
}
