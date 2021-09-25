<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class Online extends Component
{
    public function render()
    {
        return view('livewire.main.online')->layout('layouts.base');
    }
}
