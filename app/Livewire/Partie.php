<?php

namespace App\Livewire;

use App\Models\Jeu;
use Livewire\Attributes\On;
use Livewire\Component;

class Partie extends Component
{
    public Jeu $jeu;

    #[On('go')]
    public function go($jeu_id)
    {
        $this->jeu = Jeu::find($jeu_id);    
    }
}
