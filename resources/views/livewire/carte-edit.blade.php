<div x-data="{ editCarte: false }" class="border shadow-lg border-blueapollo-300 shadox-blueapollo-900">
    <div class="flex flex-col gap-3 p-3 text-center bg-blueapollo-300">
        <h2 class="h3">{{ ucfirst($carte->name) }}</h2>
        <p class="flex-shrink p-1 bg-white rounded">{{ $carte->type->intitule }}</p>
    </div>
    <div class="p-2">
        <div class="mb-3">
        </div>
        
        <form wire:submit="update">
            <button @click="editCarte = true" x-show="!editCarte" class="btn btn-success">
                <i class="fa-solid fa-pencil"></i>&nbsp;
                Modifier la carte
            </button>
            <button class="btn btn-success" type="submit" @click="editCarte = false" x-show="editCarte"><i
                    class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
            <div x-cloak x-show="editCarte">
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
            </div>
        </form>
        <div>
            <h3 class="px-1 py-3 h3 text-automne-900">Liste des questions</h3>
            @foreach ($carte->spores as $spore)
                <div wire:click="delSpore({{ $spore->id }})"
                    title="Cliquer pour détacher la question de cette carte">
                    <x-spore-item :spore="$spore" :delete="false" />
                </div>
            @endforeach
        </div>
    </div>
</div>
