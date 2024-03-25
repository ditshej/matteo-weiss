<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Games')]
class Games extends Component
{
    public function render()
    {
        return view('livewire.games');
    }
}
