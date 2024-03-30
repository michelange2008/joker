<?php

namespace App\Livewire;

use App\Models\Jeu;
use Livewire\Attributes\On;
use Livewire\Component;

class Admin extends Component
{
    public Jeu $jeu;

    public function mount($jeu_id)
    {
        $this->jeu = Jeu::find($jeu_id);
    }

    public function go($jeu_id)
    {
        $this->dispatch('go')->to(Joueur::class);
    }

    public function render()
    {
        return view('livewire.admin');
    }
}
