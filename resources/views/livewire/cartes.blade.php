<div>
    <div class="grid grid-cols-3 gap-3">

        <div class="flex flex-col gap-3">
            <h2 class="h2 text-center text-vert-900">CARTES</h2>
            <div>
                @include('joker.cartes-liste')
            </div>

            <div>
                @include('joker.carte-create')
            </div>
        </div>
        @if ($carte != null)
            <div>
                <livewire:carte-edit :$carte :key="$carte->id"></livewire:carte-edit>
            </div>
        @else
            <div>
                <h2 class="h2 text-center text-vert-900">Choisir une carte</h2>
            </div>
        @endif
        <div>
            <livewire:spores />
        </div>
    </div>
</div>
