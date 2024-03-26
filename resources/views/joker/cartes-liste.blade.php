<div>
    <h3 class="h3 p-3 bg-vert-700 text-white"><i class="fa-solid fa-dice"></i>&nbsp;Liste des cartes</h3>
    
    <div class="p-3">

        <x-flash/>

        @if ($cartes->count() == 0)
            <p class="italic">Il n'y a encore aucun carte</p>
        @else
            @foreach ($cartes as $carte)
                <div class="flex flex-row gap-2 justify-between items-center my-1 text-lg">
                    <div class=" hover:bg-gray-100 p-2 cursor-pointer flex-grow  hover:bg-gray-300"
                    wire:click="edit({{ $carte->id }})">
                        <p>{{ $carte->name }}&nbsp;</p>
                        <p class="pl-2 text-base">{{ $carte->description }} </p>
                    </div>
                    <div class="cursor-pointer">
                        <i class="text-gray-500 text-xl hover:text-red-700 fa-solid fa-square-minus"
                            wire:click="delete({{ $carte->id }})"
                            wire:confirm="Vous êtes sur de vouloir supprimer ce carte ?" title="Supprimer ce carte">
                        </i>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</div>