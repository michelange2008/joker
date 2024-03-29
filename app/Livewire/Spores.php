<?php

namespace App\Livewire;

use App\Models\Spore;
use App\Models\Type;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Spores extends Component
{
    public $spores;
    public $spores_libres = [];
    public bool $spore_deleted = false;

    #[Validate('required|max:191', message: 'Le texte est obligatoire (moins de 191 caractères)')]
    public $texte = '';
    #[Validate('required|max:191', message: 'La valeur est obligatoire (moins de 191 caractères)')]
    public $valeur = '';

    public function mount()
    {
        $this->sporesLibres();
    }

    #[On('spore_modifiee')]
    public function sporesLibres()
    {
        $this->spores_libres = [];
        $this->spores = Spore::all();
        foreach ($this->spores as $spore) {
            if ($spore->cartes->count() == 0 ) {
                $this->spores_libres[] = $spore->id ; 
             }
        }
    }

    public function create()
    {
        $this->validate();
        Spore::create([
            'texte' => $this->texte,
            'valeur' => $this->valeur,
        ]);
        session()->flash('success', 'Une nouvelle question a été ajoutée');
        $this->sporesLibres();
    }

    public function libereSpore($spore_id, $carte_id)
    {
        $this->dispatch('spore_libere', spore_id: $spore_id, carte_id: $carte_id);
    }

    public function attacheSpore($spore_id)
    {
        $this->dispatch('spore_attache', spore_id: $spore_id);
    }


    public function  delete($id)
    {
        Spore::destroy($id);
        $this->spores = Spore::all();  
        session()->flash('warning', 'Cette question a été supprimée');    
    }

}
