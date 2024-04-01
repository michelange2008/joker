<div class="flex flex-row justify-between items-center p-3 bg-gray-300 hover:bg-blueapollo-100 active:bg-blueapollo-900 active:text-white">
    <div>
        <p class="font-bold">{{ $carte->name }}</p>
        <p>{{ $carte->description }}</p>
    </div>
    <p class="text-right">
        <span class="p-2 text-sm rounded-xl bg-automne-300">
            @if ($carte->spores->count() == 0)
                Aucune question
            @elseif ($carte->spores->count() == 1)
                1 question
            @else
                {{ $carte->spores->count() }}&nbsp;questions
            @endif
        </span>
    </p>
</div>
