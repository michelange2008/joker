<div>
        {{-- En-tête --}}
        <div class="flex flex-col gap-3 p-3 text-center bg-horizon-100">
            <h3 class="h3">{{ ucfirst($jeu->name) }}</h3>
            <p class="">{{ $jeu->description }}</p>
        </div>
        {{-- Modification du jeu: titre et description --}}
        @include('joker.jeu-edit')
        {{-- Affichage des cartes associées s'il y en a avec possibilité de les détacher --}}
        <div id="carte_du_jeu">
            @if ($jeu->cartes->count() == 0)
                <h3 class="px-1 py-3 h3 text-blueapollo-900">Il n'y a aucune carte</h3>
                <p class="italic text-blueapollo-700">Pour ajouter une carte, cliquez sur l'une d'entre-elles dans la
                    liste</p>
            @else
                <h3 class="px-1 py-3 h3 text-blueapollo-900">Liste des cartes</h3>
                <div class="flex flex-col gap-1">
                    @foreach ($jeu->cartes as $carte)
                        <div wire:click="detacheCarte({{ $carte->id }})" wire:key="{{ $carte->id }}"
                            title="Cliquez pour enlever la carte">
                            <x-carte-item :carte="$carte" />
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        {{-- Bouton de lancement du jeu --}}
        @if ($jeu->cartes->count() != 0)
            <div id="lancer" wire:click="lancerJeu({{ $jeu->id }})"
                class="flex flex-row justify-around items-center p-5 my-3 text-white rounded-xl shadow-lg cursor-pointer shadow-gray-900 active:text-black bg-automne-700 hover:bg-automne-900 active:bg-automne-300 active:shadow-inner">
                <h2 class="h2">Lancer le jeu&nbsp;</h2>
                <i class="text-3xl fa-solid fa-play"></i>
            </div>
        @endif

</div>
