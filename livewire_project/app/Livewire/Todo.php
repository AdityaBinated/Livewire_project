<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todo='';             // A single todo item
    public $todos=[
        'jay shree ram',
        'hare krishna'
    ];                          // Array to store todo items

    public function add(){
        $this->todos[]=$this->todo;     // Add todo to the array
    }
    
    
    
    
    public function todos(){


    }
    
    
    
    
    
    
    public function render()
    {
        return view('livewire.todo'); //blade file in the rresources/views/livewire/todo.blade.php
    }
}
