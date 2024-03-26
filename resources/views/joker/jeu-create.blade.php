<div>
    <h3 class="h3 p-3 bg-vert-700 text-white mb-3"><i class="fa-solid fa-square-plus"></i>&nbsp;Création d'un
        nouveau jeu</h3>
    <div class="p-3">
        <form wire:submit="create">
            <label for="titre">Titre</label>
            <input id="titre" class="input" type="text" wire:model="name">
            <div>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <label for="detail">Description</label>
            <textarea id="detail" -text" cols="30" rows="5" wire:model="description"></textarea>
            <div>
                @error('description')
                    {{ $message }}
                @enderror
            </div>
                <button class="btn btn-success" type="submit"><i
                        class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
            <button class="btn btn-neutre" type="reset">Annuler</button>
        </form>
    </div>

</div>