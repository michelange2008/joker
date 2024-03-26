<div>
    <div class="grid grid-cols-3 gap-3">
        <div>
            <div>
                @include('joker.cartes-liste')
            </div>

            <div>
                @include('joker.carte-create')
            </div>
        </div>
        <div class="col-span-2">
            <div>
                @if ($carte != null)
                    <livewire:carte-edit :$carte :key="$carte->id"></livewire:carte-edit>
                @endif
            </div>
        </div>
    </div>
</div>
