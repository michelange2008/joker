<div id="vers_cartes" wire:click="{{ $methode }}"
    class="p-3 my-3 rounded cursor-pointer bg-{{ $couleur ?? 'horizon' }}-300 hover:bg-{{ $couleur ?? 'horizon' }}-500 active:bg-{{ $couleur ?? 'horizon' }}-900 active:text-white">
    <h3 class="h3">
        <i class="fa-solid fa-{{ $fa ?? 'dice' }}"></i>&nbsp;
        {{ ucfirst($texte) ?? 'texte' }}
    </h3>
    <p class="pl-6 italic">(ajouter & modifier)</p>
</div>
