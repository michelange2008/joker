<div class="relative hover:bg-violet-100 bg-gray-200 p-4 pr-8 flex flex-row justify-between gap-5 text-lg mb-1 active:bg-violet-800 active:text-white">
    <p>{{ $spore->texte }}&nbsp;</p>
    <p class="bg-violet-300 px-3 rounded place-self-center">{{ $spore->valeur }} </p>
    <div class="absolute -top-1 right-0 cursor-pointer">
        @if ($delete)
            <i class="text-gray-500 text-xl hover:text-red-700 fa-solid fa-square-xmark"
                wire:click="delete({{ $spore->id }})"
                wire:confirm="Vous êtes sur de vouloir supprimer cette question ?" title="Supprimer cette question">
            </i>
        @endif
    </div>
</div>
