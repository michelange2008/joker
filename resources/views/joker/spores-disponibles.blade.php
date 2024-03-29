<div>
    <h3 class="p-3 h3 bg-automne-300">Questions disponibles</h3>
    <x-flash />
    <div class="py-3">
        @foreach ($spores as $spore)
            @if (in_array($spore->id, $spores_libres))
            <div class="cursor-pointer" wire:click="attacheSpore({{ $spore->id }})">
                <x-spore-item :spore="$spore" :delete="true" />
            </div>
            @endif
        @endforeach
    </div>
</div>
