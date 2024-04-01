<div>
    <div id="partie" x-cloak x-show="!partie">
        <div class="mx-auto my-10 w-1/3 text-center">
            <h3 class="p-3 bg-gray-300 rounded-xl text-horizon-700 h3">
                <i class="fa-solid fa-stopwatch"></i>&nbsp;
                Aucune partie n'a encore démarré
            </h3>
        </div>
    </div>
    <div id="partie" x-cloak x-show="partie">

        <div id="joueur">
            <h2 class="h2">{{ $jeu->name ?? '' }}</h2>
            <h3 class="h3">{{ $jeu->description ?? '' }}</h3>
        </div>
    </div>
</div>
