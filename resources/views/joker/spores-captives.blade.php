<div>
    <h3 class="p-3 h3 bg-automne-100">Questions captives</h3>
    <div class="py-3">
        @foreach ($spores as $spore)
            @if (!in_array($spore->id, $spores_libres))
                <div>
                    <x-spore-item :spore="$spore" :delete="false" />
                    @foreach ($spore->cartes as $carte)
                        <p class="px-3 pb-1 -mt-2 mb-2 italic text-right bg-gray-200">
                            {{ ucfirst($carte->name) }}&nbsp;
                            <i class="fa-solid fa-right-from-bracket hover:text-red-800" title="libérer la question"
                                wire:click="libereSpore({{ $spore->id }}, {{ $carte->id }})">
                            </i>
                        </p>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>
</div>
