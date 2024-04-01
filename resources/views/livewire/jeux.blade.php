<div x-data="{ partie: @entangle('partie'),  cartes_show: @entangle('cartes_show')  }">

    <div x-cloak x-show="!partie">
        
        <div x-cloak x-show="!cartes_show">

            @include('joker.jeux-manager')

        </div>

        <div x-cloak x-show="cartes_show">

            <livewire:cartes />

        </div>
    </div>

    <div x-cloak x-show="partie">
        
        <livewire:partie />

    </div>

</div>
