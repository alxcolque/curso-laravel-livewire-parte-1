<?php

namespace App\Livewire;

use Livewire\Component;

class NombreDelComponente extends Component
{
    public $mensaje = "Hola, Livewire!";
    public function cambiarMensaje()
    {
        $this->mensaje = "¡Mensaje Cambiado!";
    }
    public function render()
    {
        return view('livewire.nombre-del-componente');
    }
}
