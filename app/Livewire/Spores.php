<?php

namespace App\Livewire;

use App\Models\Spore;
use App\Models\Type;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Spores extends Component
{
    public $spores;
    public bool $spore_deleted = false;

    #[Validate('required|max:191', message: 'Le texte est obligatoire (moins de 191 caractères)')]
    public $texte = '';
    #[Validate('required|max:191', message: 'La valeur est obligatoire (moins de 191 caractères)')]
    public $valeur = '';

    public function mount()
    {
        $this->spores = Spore::all();
    }

    public function create()
    {
        $this->validate();
        Spore::create([
            'texte' => $this->texte,
            'valeur' => $this->valeur,
        ]);
        session()->flash('success', 'Une nouvelle question a été ajoutée');
        $this->spores = Spore::all();
    }

    public function  delete($id)
    {
        Spore::destroy($id);
        $this->spores = Spore::all();  
        session()->flash('warning', 'Cette question a été supprimée');    
    }

}
