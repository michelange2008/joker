<div>
    <h3 class="h3 p-3 bg-vert-700 text-white"><i class="fa-solid fa-dice"></i>&nbsp;Liste des jeux</h3>
    <div class="p-3">

        @if ($jeux->count() == 0)
            <p class="italic">Il n'y a encore aucun jeu</p>
        @else
            @foreach ($jeux as $jeu)
                <div class="flex flex-row gap-2 justify-between items-center my-1 text-lg">
                    <div class=" hover:bg-gray-100 p-2 cursor-pointer flex-grow"
                    wire:click="jeu_edit({{ $jeu->id }})">
                        <p>{{ $jeu->name }}&nbsp;</p>
                        <p class="pl-2 text-base">{{ $jeu->description }} </p>
                    </div>
                    <div class="cursor-pointer">
                        <i class="text-gray-500 text-xl hover:text-red-700 fa-solid fa-square-minus"
                            wire:click="delete({{ $jeu->id }})"
                            wire:confirm="Vous êtes sur de vouloir supprimer ce jeu ?" title="Supprimer ce jeu">
                        </i>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</div>