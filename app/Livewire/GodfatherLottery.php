<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Götti Lösli')]
class GodfatherLottery extends Component
{
    public function render()
    {
        return view('livewire.godfather-lottery');
    }
}
