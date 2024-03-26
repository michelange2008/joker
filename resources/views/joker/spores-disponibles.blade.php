<div>
    <h3 class="p-3 bg-violet-400 h3">Questions disponibles</h3>
    <div>
        @foreach ($spores as $spore)
            @if (!$carte->spores->contains($spore))
            <div class="p-3 my-1 cursor-pointer bg-zinc-200 hover:bg-violet-300 active:bg-violet-900 active:text-white"
                wire:click="addSpore({{ $spore->id }})">
                {{ $spore->texte }} <span class="px-2 bg-blue-300 rounded-lg">{{ $spore->valeur}}</span>
            </div>
                
            @endif
        @endforeach
    </div>

</div>