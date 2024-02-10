<div>
    <h4>Añadir un post</h4>
    <input type="text" wire:model="post">
    <button type="button" wire:click="agregarPost">Agregar</button>
    <h4>Lista de posts</h4>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</div>
