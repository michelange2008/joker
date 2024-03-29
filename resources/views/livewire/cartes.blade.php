<div>
    <div class="grid grid-cols-3 gap-3">

        <div class="flex flex-col gap-3">
            <h2 class="text-center h2 text-blueapollo-900">CARTES</h2>
            <div>
                @include('joker.cartes-liste')
            </div>

            <div>
                @include('joker.carte-create')
            </div>
        </div>
        @if ($carte != null)
            <div>
                <h2 class="text-center h2 text-blueapollo-900">Carte en cours</h2>
                <p class="italic text-center text-vert-900">(Modifier, ajouter, enlever des questios)</p>
                <livewire:carte-edit :$carte :key="$carte->id"></livewire:carte-edit>
            </div>
        @else
            <div>
                <h2 class="text-center h2 text-blueapollo-900">Choisir une carte</h2>
                <p class="italic text-center text-vert-900">(En cliquant dessus dans la liste de gauche)</p>
            </div>
        @endif
        <div>
            <livewire:spores />
        </div>
    </div>
</div>
