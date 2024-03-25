<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dino Memory')]
class DinoMemory extends Component
{

    public function render()
    {
        return view('livewire.dino-memory');
    }
}
