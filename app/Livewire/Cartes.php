<?php

namespace App\Livewire;

use App\Models\Carte;
use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Cartes extends Component
{
    public Collection $cartes;
    public Collection $types;
    public $carte;
    #[Validate('required', message: 'Le type de question est obligatoire')]
    public $type_id = '';
    #[Validate('required', message: 'Un titre est obligatoire et doit compter moins de 191 caractères')]
    public $name;
    #[Validate('max:65000', message: 'La description ne doit pas dépasser 65000 caractères.')]
    public $description;

    public function mount()
    {
        // $this->carte = Carte::first();
        $this->types = Type::all();
        $this->cartes = Carte::all();    
    }

    public function create()
    {
        $this->validate();
        Carte::create([
            'name' => $this->name,
            'description' => $this->description,
            'type_id' => $this->type_id,
        ]);
        $this->cartes = Carte::all();
        session()->flash('success', 'Une nouvelle carte a été ajoutée');

    }

    public function edit($id)
    {
        $this->carte = Carte::find($id);
    }

    public function delete($id)
    {
        Carte::destroy($id);
        $this->cartes = Carte::all();
        session()->flash('warning', 'Cette carte a été supprimée');    
    }

    public function render()
    {
        return view('livewire.cartes');
    }
}
