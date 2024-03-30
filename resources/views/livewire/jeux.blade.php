<div class="grid grid-cols-3 gap-4">

    <div id="jeux">
        <div id=liste_des_jeux class="my-3 bg-gray-300">
            @include('joker.jeux-liste')
        </div>
        <div id="jeu_create" class="my-3 bg-gray-300 border">
            @include('joker.jeu-create')
        </div>
    </div>

    <div id="jeu_en_cours" class="my-3">
        @if ($jeu == null)
            <h3 class="p-3 text-white h3 bg-zinc-700">Aucun jeu choisi</h3>
        @else
            @include('joker.jeu')
        @endif

    </div>

    @if ($jeu != null)
        <div id="cartes">
            <h3 class="p-3 mt-3 text-white h3 bg-blueapollo-700">Liste des cartes disponibles</h3>
            <div class="flex flex-col gap-1">
                @foreach ($cartes as $carte)
                    <div wire:click="attacheCarte({{ $carte->id }})">
                        <x-carte-item :carte="$carte" />
                    </div>
                @endforeach
            </div>
        </div>
    @endif

</div>
