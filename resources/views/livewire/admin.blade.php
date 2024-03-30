<div>
    <h3 class="h3">{{ $jeu->name }}</h3>
    <button class="btn btn-horizon" wire:click="go( {{$jeu->id}} )">Démarre</button>

    <livewire:joueur />
</div>
