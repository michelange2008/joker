<?php

namespace App\Livewire;

use App\Models\Carte;
use App\Models\Spore;
use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CarteEdit extends Component
{
    public Collection $cartes;
    public Collection $types;
    public Collection $spores;
    #[Modelable]
    public $carte;
    #[Validate('required', message: 'Le type de question est obligatoire')]
    public $type_id = '';
    #[Validate('required', message: 'Un titre est obligatoire et doit compter moins de 191 caractères')]
    public $name;
    #[Validate('max:65000', message: 'La description ne doit pas dépasser 65000 caractères.')]
    public $description;

    public function mount($carte)
    {
        $this->carte = $carte;
        $this->name = $carte->name;
        $this->description = $carte->description;
        $this->types = Type::all();
        $this->cartes = Carte::all();
        $this->spores = Spore::all();    
    }

    public function update()
    {
        Carte::where('id', $this->carte->id)
            ->update([
                'name' => $this->name,
                'description' => $this->description,
            ]);
        $this->carte = Carte::find($this->carte->id);    
        $this->dispatch('carte_updated', carte_id: $this->carte->id);
    }

    #[On('spore_attache')]
    public function addSpore($spore_id)
    {
        $this->carte->spores()->attach($spore_id);
        $this->dispatch('spore_modifiee');
    }

    #[On('spore_libere')]
    public function libereSpore($spore_id, $carte_id)
    {
        $carte = Carte::find($carte_id);
        $carte->spores()->detach($spore_id);    
        $this->dispatch('spore_modifiee');
    }

    public function delSpore($spore_id)
    {
        $this->carte->spores()->detach($spore_id);
        $this->dispatch('spore_modifiee');
    }

}
