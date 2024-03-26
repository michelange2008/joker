<div>
    <h3 class="h3 p-3 bg-vert-700 text-white mb-3"><i class="fa-solid fa-square-plus"></i>&nbsp;Création d'une
        nouvelle carte</h3>
    <div class="p-3">
        <form wire:submit="create">
            <div>
                <label class="text-gray-700" for="type">Type de question</label>
                <select class="input" name="type" id="type" wire:model='type_id'>
                    <option hidden value="">Choisir un type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->intitule }}</option>
                    @endforeach
                </select>
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
    </div>

</div>
