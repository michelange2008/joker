<div>
    <h3 class="h3 p-3 bg-vert-700 text-white"><i class="fa-solid fa-dice"></i>&nbsp;Liste des questions</h3>
    <div class="p-3">

        <x-flash />
        
        @if ($spores->count() == 0)
            <p class="italic">Il n'y a encore aucune question</p>
        @else
            @foreach ($spores as $spore)
                <div class="flex flex-row gap-2 justify-between items-center">
                    <x-spore-item :spore="$spore" :delete="false"/>
                    <div class="cursor-pointer">
                        <i class="text-gray-500 text-xl hover:text-red-700 fa-solid fa-square-minus"
                            wire:click="delete({{ $spore->id }})"
                            wire:confirm="Vous êtes sur de vouloir supprimer cette question ?"
                            title="Supprimer cette question">
                        </i>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</div>
