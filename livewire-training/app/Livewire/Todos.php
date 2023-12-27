<?php

namespace App\Livewire;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]

class Todos extends Component
{
    public $todo = '';
    public $todos = [
        'Go to the store',
        'Go to the market',
        'Go to work',
    ];
    public function addTodo()
    {
        $this->todos[] = $this->todo;
        $this->todo = '';

    }

    public function updatedTodo($value) {

        $this->todo = strtoupper($value);

        $this->validate([
            'todo' => 'required|max:10',
        ]);

    }

    public function render()
    {
        return view('livewire.todos');
    }
}
