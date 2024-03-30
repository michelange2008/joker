<div x-data="{ editJeu: false }">
    <button @click="editJeu = true" x-show="!editJeu" class="btn btn-horizon" wire:click="jeu_edit({{ $jeu->id }})">
        <i class="fa-solid fa-pencil"></i>&nbsp;
        Modifier le jeu
    </button>
    <form wire:submit="update">
        <button class="btn btn-horizon" type="submit" @click="editJeu = false" x-show="editJeu"><i
                class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
        <div x-cloak x-show="editJeu">
            <div>

                <label class="text-horizon-700">Titre</label>
                <input class="input" type="text" wire:model="name" wire:key="{{ $jeu->id }}">
                <div>
                    @error('name')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>

                <label class="text-horizon-700">Description</label>
                <textarea class="input" cols="30" rows="5" wire:model="description" wire:key="{{ $jeu->id }}"></textarea>
                <div>
                    @error('description')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </form>
</div>
