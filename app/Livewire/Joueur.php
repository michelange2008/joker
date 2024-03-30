<?php

namespace App\Livewire;

use App\Models\Jeu;
use Livewire\Attributes\On;
use Livewire\Component;

class Joueur extends Component
{
    public Jeu $jeu;

    #[On('demarre_jeu')]
    public function demarreJeu($jeu_id)
    {
        $this->jeu = Jeu::find($jeu_id);    
    }

    #[On('go')]
    public function onyva()
    {
        $this->jeu = Jeu::first();
    }

    public function render()
    {
        return view('livewire.joueur');
    }
}
