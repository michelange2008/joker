<div>
    <h3 class="p-3 mb-3 text-white h3 bg-horizon-500"><i class="fa-solid fa-square-plus"></i>&nbsp;Création d'un
        nouveau jeu</h3>
    <div class="p-3">
        <form wire:submit="create">
            <label for="titre" class="text-horizon-700">Titre</label>
            <input id="titre" class="input" type="text" wire:model="name">
            <div>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <label for="detail" class="text-horizon-700">Description</label>
            <textarea id="detail" class="input" cols="30" rows="5" wire:model="description"></textarea>
            <div>
                @error('description')
                    {{ $message }}
                @enderror
            </div>
                <button class="btn btn-horizon" type="submit"><i
                        class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
            <button class="btn btn-neutre" type="reset">Annuler</button>
        </form>
    </div>

</div>