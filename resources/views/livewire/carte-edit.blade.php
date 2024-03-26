<div class="grid grid-cols-2 gap-3">
    <div>
        <h2 class="p-3 bg-amber-400 h3">Compléter/Modifier une carte</h2>
        <form wire:submit="update">
            <div class="mb-3">
                <h2 class="p-2 pl-1 h2">{{ ucfirst($carte->name) }}</h2>
                <p class="p-2 bg-blue-300 rounded">{{ $carte->type->intitule }}</p>
            </div>
            <div>

                <label for="name">Titre</label>
                <input id="name" name="name" class="input" type="text" wire:model="name" wire:key="name">
                <div>
                    @error('name')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>

                <label for="detail">Description</label>
                <textarea id="detail" class="input" cols="30" rows="5" wire:model="description"></textarea>
                <div>
                    @error('description')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-success" type="submit"><i
                    class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
            <button class="btn btn-neutre" type="reset">Annuler</button>
        </form>

        @foreach ($carte->spores as $spore)
            <div class="p-3 my-1 cursor-pointer bg-zinc-200 hover:bg-violet-300 active:bg-violet-900 active:text-white"
                wire:click="delSpore({{ $spore->id }})">
                {{ $spore->texte }}
            </div>
        @endforeach
    </div>

    <div>
        @include('joker.spores-disponibles')
    </div>
</div>
