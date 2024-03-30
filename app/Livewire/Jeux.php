<?php

namespace App\Livewire;

use App\Models\Carte;
use App\Models\Jeu;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Jeux extends Component
{
    public Jeu $jeu;
    public Collection $jeux;
    public Collection $cartes;

    #[Validate('required|max:191', message: "Le titre est obligatoire et ne doit pas dépasser 191 caractères")]
    public $name = '';
    
    #[Validate('max:65000', as: 'description')]
    public $description = '';

    public function mount()
    {
        $this->jeux = Jeu::all();
        $this->cartes = Carte::all();
    }

    public function create()
    {
        $this->validate();
        
        Jeu::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $this->reset('name', 'description');
        $this->jeux = Jeu::all();
    }

    public function jeu_edit($jeu_id)
    {
        $this->jeu = Jeu::find($jeu_id);
        $this->name = $this->jeu->name;
        $this->description = $this->jeu->description;
    }

    public function update()
    {
        $this->validate();
        Jeu::where('id', $this->jeu->id)
            ->update([
                'name' => $this->name,
                'description' => $this->description,
            ]);
        $this->reset('name', 'description');
        $this->jeux = Jeu::all();
        $this->jeu = Jeu::find($this->jeu->id);
    }

    public function delete($jeu_id)
    {
        Jeu::destroy($jeu_id);
        $this->jeux = Jeu::all();
    }

    public function attacheCarte($carte_id)
    {
        $this->jeu->cartes()->detach($carte_id);    
        $this->jeu->cartes()->attach($carte_id);    
    }

    public function detacheCarte($carte_id)
    {
        $this->jeu->cartes()->detach($carte_id);
    }

    public function lancerJeu($jeu_id)
    {
        $this->dispatch('demarre_jeu', jeu_id: $jeu_id);
        return redirect()->route('jeu', $jeu_id);
    }
}
