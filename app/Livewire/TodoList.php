<?php

namespace App\Livewire;

use App\Models\Todo; 
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;

#[Title('Todo List')]
class TodoList extends Component
{
    public $todos = [];

    public function fetchTodos()
    {
        $this->todos = Todo::all();
    }

    #[On(['todo-deleted'])] 
    public function deleteTodo()
    {
        $this->fetchTodos();
    }

    #[On(['todo-updated'])] 
    public function todoMarkAsComplete()
    {
        $this->fetchTodos();
    }

    public function mount()
    {
        $this->fetchTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
