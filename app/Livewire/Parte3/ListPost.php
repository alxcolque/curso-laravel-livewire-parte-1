<?php

namespace App\Livewire\Parte3;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public $posts, $post;
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.parte3.list-post');
    }
    public function agregarPost()
    {
        Post::create(['title' => $this->post]);
        $this->post = '';
    }
}
