<?php

namespace App\Livewire;

use App\Models\Jeu;
use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Jeux extends Component
{
    public Collection $jeux;
    public Collection $types;
    public Jeu $jeu;
    
    #[Validate('required|max:191', message: "Le titre est obligatoire et ne doit pas dépasser 191 charactères")]
    public $name;
    
    #[Validate('max:65000', as: 'description')]
    public $description;

    public $session;
    public string $type;
    public array $nombres = [];
    public array $questions = [];
    public string $texte = '';
    public int $valeur = 0;

    public function mount()
    {
        $this->jeux = Jeu::all();
        $this->types = Type::all();
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
        $this->fill(
            $this->jeu->only('name', 'description'),
        );
        // $this->name = $this->jeu->name;
        // $this->description = $this->jeu->description;
    }

    public function update()
    {
        Jeu::where('id', $this->jeu->id)
            ->update([
                'name' => $this->name,
                'description' => $this->description,
            ]);
        $this->reset('name', 'description');
        $this->jeux = Jeu::all();
    }

    public function modifie($jeu_id)
    {
    }

    public function delete($jeu_id)
    {
        Jeu::destroy($jeu_id);
        $this->jeux = Jeu::all();
    }

    public function annuler()
    {
        $this->reset('name', 'description');
    }

    public function choixType()
    {
    }

    public function creeNombre()
    {
        $this->nombres[] = [
            "texte" => $this->texte,
            "valeur" => $this->valeur,
        ];
        $this->texte = '';
        $this->valeur = 0;
    }

    public function render()
    {
        return view('livewire.jeux');
    }
}
