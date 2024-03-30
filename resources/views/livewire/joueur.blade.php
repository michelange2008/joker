<div>
    @if ($jeu == null)
        <p>Le jeu n'a pas encore démarré</p>
    @else
        
    {{$jeu->name}}
    @endif
</div>
<script>
    document.addEventListener('livewire:init', () => {
       Livewire.on('go', (event) => {
          alert('go')
       });
    });
</script>