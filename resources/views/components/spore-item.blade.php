<div class="flex relative flex-row gap-5 justify-between p-4 pr-8 mb-1 text-lg bg-gray-200 hover:bg-automne-100 active:bg-automne-800 active:text-white">
    <p>{{ $spore->texte }}&nbsp;</p>
    <p class="place-self-center px-3 rounded bg-automne-300">{{ $spore->valeur }} </p>
    <div class="absolute right-0 -top-1 cursor-pointer">
        @if ($delete)
            <i class="text-xl text-gray-500 hover:text-red-700 fa-solid fa-square-xmark"
                wire:click="delete({{ $spore->id }})"
                wire:confirm="Vous êtes sur de vouloir supprimer cette question ?" title="Supprimer cette question">
            </i>
        @endif
    </div>
</div>
