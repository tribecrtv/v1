<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class Gatherings extends Component
{
    public function render()
    {
        return view('livewire.main.gatherings')->layout('layouts.base');
    }
}
