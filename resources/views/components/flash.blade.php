<div>
    @if (session()->has('success'))
        <div class="bg-vert-300 p-3">
            {{ session('success') }}
        </div>
    @elseif (session()->has('warning'))
        <div class="bg-orange-300 p-3">
            {{ session('warning') }}
        </div>
    @endif
</div>
