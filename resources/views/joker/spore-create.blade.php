<div>
    <h3 class="p-3 mb-3 text-white h3 bg-automne-700"><i class="fa-solid fa-square-plus"></i>&nbsp;Création d'une
        nouvelle question</h3>
    <div class="px-3">
        <form wire:submit="create">
            <div class="my-1">
                <label class="text-automne-700" for="name">Question</label>
                <input id="name" name="name" class="input" type="text" wire:model="texte" wire:key="name">
                <div>
                    @error('name')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="my-1">
                <label class="text-automne-700" for="intitule">Réponse</label>
                <input id="intitule" class="input" type="text" wire:model="valeur">
                <div>
                    @error('description')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-danger" type="submit"><i
                        class="fa-solid fa-floppy-disk"></i>&nbsp;Enregistrer</button>
                <button class="btn btn-neutre" type="reset">Annuler</button>
            </div>
        </form>
    </div>

</div>
