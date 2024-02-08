<div>
    Aqui el evento
    <title>Título</title>
    <input type="text" wire:model="title" placeholder="Titulo">
    @error('title') <span style="color: red">{{ $message }}</span> @enderror
    <title>Elige un color</title>
    <input type="color" wire:model="color">
    <br>
    <button wire:click="saveData">Guardar</button>
    <br>
    <h2>Resultados</h2>
    <p style="color: {{$color}}">{{$title}}</p>
    <script>
        window.addEventListener('eventoEmitido', function(datosAdicionales) {
            alert('Titulo: '+datosAdicionales.detail[0].title);
            //console.log(datosAdicionales.detail[0].title);
        });
    </script>
</div>
