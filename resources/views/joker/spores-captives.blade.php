<div>
    <h3 class="h3 p-3 bg-violet-200">Questions captives</h3>
    <div class="py-3">
        @foreach ($spores as $spore)
            @if (!in_array($spore->id, $spores_libres))
                <x-spore-item :spore="$spore" :delete="false" />
                @foreach ($spore->cartes as $carte)
                    <p class="px-3 text-right italic pb-1 bg-gray-200 -mt-2 mb-2">
                        {{ ucfirst($carte->name) }}&nbsp;
                        <i class="fa-solid fa-right-from-bracket hover:text-red-800" 
                            title="libérer la question" wire:click="libereSpore({{ $spore->id}}, {{ $carte->id }})">
                        </i>
                    </p>
                @endforeach
            @endif
        @endforeach
    </div>
</div>
