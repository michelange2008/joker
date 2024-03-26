<div>
    <h2 class="h3 p-3 bg-amber-400">Compléter/Modifier une carte</h2>
    <form wire:submit="update">
        <div class="mb-3">
            <h2 class="h2 p-2 pl-1">{{ ucfirst($carte->name) }}</h2>
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
        <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
        <button class="btn btn-neutre" type="reset">Annuler</button>
    </form>

    @foreach ($carte->spores as $spore)
        <div class="p-3 bg-zinc-200 my-1 cursor-pointer hover:bg-violet-300 active:bg-violet-900 active:text-white"
            wire:click="delSpore({{ $spore->id }})">
            {{ $spore->texte }}
        </div>
    @endforeach

    <div>
        @foreach ($spores as $spore)
            <div class="p-3 bg-zinc-200 my-1 cursor-pointer hover:bg-violet-300 active:bg-violet-900 active:text-white"
                wire:click="addSpore({{ $spore->id }})">
                {{ $spore->texte }}
            </div>
        @endforeach
    </div>
</div>
