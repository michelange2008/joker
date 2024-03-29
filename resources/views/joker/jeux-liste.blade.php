<div>
    <h3 class="p-3 text-white h3 bg-horizon-700"><i class="fa-solid fa-dice"></i>&nbsp;Liste des jeux</h3>
    <div class="p-3">

        @if ($jeux->count() == 0)
            <p class="italic">Il n'y a encore aucun jeu</p>
        @else
            @foreach ($jeux as $jeu)
                <div class="flex flex-row gap-2 justify-between items-center my-1 text-lg">
                    <div class="flex-grow p-2 cursor-pointer hover:bg-horizon-100"
                    wire:click="jeu_edit({{ $jeu->id }})">
                        <p>{{ $jeu->name }}&nbsp;</p>
                        <p class="pl-2 text-base">{{ $jeu->description }} </p>
                    </div>
                    <div class="cursor-pointer">
                        <i class="text-xl text-gray-500 hover:text-red-700 fa-solid fa-square-minus"
                            wire:click="delete({{ $jeu->id }})"
                            wire:confirm="Vous êtes sur de vouloir supprimer ce jeu ?" title="Supprimer ce jeu">
                        </i>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</div>