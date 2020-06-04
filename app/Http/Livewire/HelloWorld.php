<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = ' Jelly';
    public $name_debounce = ' Jelly '.'debounce';
    public $name_lazy = ' Jelly '.'lazy';

    public $loud = false;
    public $loudalot = false;
    public $greeting = 'Hello';
    public $greetingalot = ['Hello'];


    public function render()
    {
        return view('livewire.hello-world');
    }
}
