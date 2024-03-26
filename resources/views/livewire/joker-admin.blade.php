<div class="grid grid-cols-3 gap-4">

    <div id="jeux">
        <div id=liste_des_jeux class="my-3 bg-gray-300">
            @include('joker.jeux-liste')
        </div>
        <div id="jeu_create" class="border my-3 bg-gray-300">
            @include('joker.jeu-create')
        </div>
    </div>

    <div id="jeu_en_cours" class="my-3">
        <form wire:submit="update">
            @if ($jeu == null)
                <h3 class="h3 p-3 bg-zinc-700 text-white">Aucun jeu choisi</h3>
            @else
                <div x-data="{ edit_name: false, edit_description: false }">
                    <h3 class="h3 p-3 bg-amber-700 text-white">{{ $jeu->name }}</h3>
                    <div x-show="!edit_description" class="flex flex-row justify-between items-center text-lg">
                        <input class="input p-5" type="text" wire:model="name" />
                        <p x-on:click="edit_description = false" wire:click="update"
                            class="cursor-pointer border-b hover:text-vert-700 bg-white place-self-stretch flex flex-col justify-center px-2">
                            <i class="block fa-regular fa-square-check"></i>
                        </p>
                    </div>

                    <div x-show="!edit_description" class="flex flex-row justify-between items-center text-lg px-1">
                        <p class="p-5 font-bold">{{ $jeu->description }}</p>
                        <p x-on:click="edit_description = true" class="cursor-pointer hover:text-vert-700">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </p>
                    </div>
                    <div x-show="!edit_description" class="flex flex-row justify-between items-center text-lg">
                        <input class="input p-5" type="text" wire:model="description" />
                        <p x-on:click="edit_description = false" wire:click="update"
                            class="cursor-pointer border-b hover:text-vert-700 bg-white place-self-stretch flex flex-col justify-center px-2">
                            <i class="block fa-regular fa-square-check"></i>
                        </p>
                    </div>
                </div>
                <div id="carte_du_jeu">
                    @foreach ($jeu->cartes as $carte)
                        <p>{{ $carte->name }} </p>
                    @endforeach
                </div>
            @endif
        </form>
    </div>

    {{-- <div>
        <p>Création d'un nouveau questionnaire</p>
        <p>Choisir le type</p>
        <div class="flex flex-col gap-3">
            @foreach ($types as $typ)
                <label class="flex items-center" for="{{ $typ['categorie'] }}">
                    <input
                        class="text-gray-700 bg-gray-200 rounded border-transparent focus:border-transparent focus:bg-gray-200 focus:ring-1 focus:ring-offset-2 focus:ring-gray-500"
                        type="radio" id="{{ $typ['categorie'] }}" name="type" value="{{ $typ['categorie'] }}"
                        wire:model.live="type">
                    <span class="ml-2">{{ $typ['intitule'] }} </span>
                </label>
            @endforeach
        </div>

        @foreach ($types as $typ)
            @if ($type == $typ['categorie'] && view()->exists('livewire.' . $typ['categorie']))
                @include('livewire.' . $typ['categorie'])
            @endif
        @endforeach
    </div> --}}
</div>
