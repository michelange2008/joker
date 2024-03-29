<div x-data="{ editCarte: false }" class="border border-vert-300  shadow-lg shadox-vert-900">
    <div class="p-3 bg-vert-300 flex flex-col gap-3 text-center">
        <h2 class="h3">{{ ucfirst($carte->name) }}</h2>
        <p class="flex-shrink p-1 bg-white rounded">{{ $carte->type->intitule }}</p>
    </div>
    <div class="p-2">
        <div class="mb-3">
        </div>

        <button @click="editCarte = !editCarte" class="btn btn-neutre">Modifier la carte</button>
        <div x-cloak x-show="editCarte">
            <form wire:submit="update">
                <div>

                    <label for="name">Titre</label>
                    <input id="name" name="name" class="input" type="text" wire:model="name"
                        wire:key="name">
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
        </div>
        <div>
            <h3 class="h3 px-1 py-3 text-violet-800">Liste des questions</h3>
            @foreach ($carte->spores as $spore)
                <div wire:click="delSpore({{ $spore->id }})">
                    <x-spore-item :spore="$spore" :delete="false" />
                </div>
            @endforeach
        </div>
    </div>
</div>
