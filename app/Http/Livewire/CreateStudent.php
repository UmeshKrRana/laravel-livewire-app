<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateStudent extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.create-student');
    }
}
