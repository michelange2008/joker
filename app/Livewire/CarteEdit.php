<?php

namespace App\Livewire;

use App\Models\Carte;
use App\Models\Spore;
use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Modelable;
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
    #[Validate('max:65000', message: 'La description ne doit pas dépasser 65000 charactères.')]
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
    }

    public function addSpore($id)
    {
        $this->carte->spores()->attach($id);
    }

    public function delSpore($id)
    {
        $this->carte->spores()->detach($id);
    }

}
