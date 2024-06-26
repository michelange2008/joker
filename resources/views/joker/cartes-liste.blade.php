<div>
    <h3 class="p-3 text-white h3 bg-blueapollo-700"><i class="fa-solid fa-dice"></i>&nbsp;Liste des cartes</h3>
    
    <div class="p-3">

        <x-flash/>

        @if ($cartes->count() == 0)
            <p class="italic">Il n'y a encore aucun carte</p>
        @else
            @foreach ($cartes as $carte)
                <div class="flex flex-row gap-2 justify-between items-center my-1 text-lg">
                    <div class="flex-grow p-2 bg-gray-200 cursor-pointer hover:bg-blueapollo-300"
                    wire:click="edit({{ $carte->id }})" title="Cliquer pour éditer">
                        <p>{{ $carte->name }}&nbsp;</p>
                        <p class="pl-2 text-base">{{ $carte->description }} </p>
                    </div>
                    <div class="cursor-pointer">
                        <i class="text-xl text-gray-500 hover:text-red-700 fa-solid fa-square-minus"
                            wire:click="delete({{ $carte->id }})"
                            wire:confirm="Vous êtes sur de vouloir supprimer ce carte ?" title="Supprimer ce carte">
                        </i>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</div>