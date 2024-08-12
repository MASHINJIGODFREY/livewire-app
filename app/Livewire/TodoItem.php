<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class TodoItem extends Component
{
    // #[Reactive]
    public $todo;

    public function markAsComplete()
    {
        Todo::find($this->todo->id)->update(['complete' => true]);
        $this->dispatch('todo-updated');
    }

    public function delete()
    {
        $this->todo->delete();
        $this->dispatch('todo-deleted');
    }

    public function mount(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function render()
    {
        return view('livewire.todo-item');
    }
}
