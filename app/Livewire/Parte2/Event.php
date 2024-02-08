<?php

namespace App\Livewire\Parte2;

use Livewire\Component;

class Event extends Component
{
    public $title, $color;
    public function saveData()
    {
        $this->validate([
            'title' => 'required|min:3|max:5',
        ]);
        $this->dispatch('eventoEmitido',['title'=>$this->title, 'color'=>$this->color]);
    }
    public function render()
    {
        return view('livewire.parte2.event');
    }
}
