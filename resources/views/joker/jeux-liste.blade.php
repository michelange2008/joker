<div>
    <h3 class="p-3 text-white h3 bg-horizon-700"><i class="fa-solid fa-dice"></i>&nbsp;Liste des jeux</h3>
    <div>

        @if ($jeux->count() == 0)
            <p class="italic">Il n'y a encore aucun jeu</p>
        @else
            <div class="flex flex-col gap-2 p-3">
                @foreach ($jeux as $jeu)
                    <div class="flex flex-row gap-2 justify-between items-center my-1 text-lg bg-gray-100">
                        <div class="flex-grow p-2 cursor-pointer hover:bg-horizon-100 active:bg-horizon-700 active:text-white"
                            wire:click="jeu_edit({{ $jeu->id }})">
                            <p class="font-bold text-horizon-900">{{ $jeu->name }}&nbsp;</p>
                            <p class="pl-2 text-base text-horizon-500">{{ $jeu->description }} </p>
                        </div>
                        <div class="pr-2 cursor-pointer">
                            <i class="text-xl text-gray-500 hover:text-red-700 fa-solid fa-square-minus"
                                wire:click="delete({{ $jeu->id }})"
                                wire:confirm="Vous êtes sur de vouloir supprimer ce jeu ?" title="Supprimer ce jeu">
                            </i>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

</div>
