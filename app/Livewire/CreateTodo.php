<?php

namespace App\Livewire;

use App\Models\Todo; 
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Create Todo')]
class CreateTodo extends Component
{
    public $description = '';
    public $priority = '';
    public $complete = false;

    public function rules()
    {
        return [
            'description' => 'required|string|max:50',
            'priority' => 'required|string|max:10'
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Todo description is required',
            'description.string' => 'Todo description must be string.',
            'description.max' => 'Todo description is too long (50 characters maximum).',
            'priority.required' => 'Select Todo priority',
            'priority.string' => 'Todo priority must be string.',
            'priority.max' => 'Todo priority is too long (10 characters maximum).'
        ];
    }

    public function submitForm()
    {
        $validatedData = $this->validate();
        $this->pull();
        Todo::create([
            'description' => $validatedData["description"],
            'priority' => $validatedData["priority"],
            'complete' => $this->complete,
        ]); 
        session()->flash('status', 'Todo successfully saved.');
        $this->dispatch('alert_remove');
        $this->reset(['description', 'priority']);
    }

    public function render()
    {
        return view('livewire.create-todo');
    }
}
