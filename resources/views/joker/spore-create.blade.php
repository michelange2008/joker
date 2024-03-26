<div>
    <h3 class="h3 p-3 bg-vert-700 text-white mb-3"><i class="fa-solid fa-square-plus"></i>&nbsp;Création d'une
        nouvelle question</h3>
    <div class="p-3">
        <form wire:submit="create">
            <div class="my-3">
                <label class="text-gray-700" for="name">Question</label>
                <input id="name" name="name" class="input" type="text" wire:model="texte" wire:key="name">
                <div>
                    @error('name')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="my-3">
                <label class="text-gray-700" for="intitule">Réponse</label>
                <input id="intitule" class="input" type="text" wire:model="valeur">
                <div>
                    @error('description')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-success" type="submit"><i
                        class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
                <button class="btn btn-neutre" type="reset">Annuler</button>
            </div>
        </form>
    </div>

</div>
