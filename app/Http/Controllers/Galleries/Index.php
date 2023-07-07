<?php

namespace App\Http\Controllers\Galleries;

use Livewire\Component;

class Index extends Component
{
    public $images;

    public function mount()
    {
        $imageDirectory = public_path('Outdoor-lightning');
        $this->images = scandir($imageDirectory);
        $this->images = array_diff($this->images, ['.', '..']);
    }

    public function render()
    {
        return view('galleries.index');
    }
}
