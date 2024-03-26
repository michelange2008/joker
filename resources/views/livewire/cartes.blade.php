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
        <div>
            <div>
                <livewire:carte-edit :$carte :key="$carte->id"></livewire:carte-edit> 
            </div>
        </div>
    </div>
</div>
