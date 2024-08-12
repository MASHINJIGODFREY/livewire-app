<div class="container mt-5">
    <h1 class="text-center">Todo List</h1>
    <div class="row mb-3">
        <div class="col text-right">
            <a href="/create" class="btn btn-primary" wire:navigate>
                <span class="plusmark"></span> Create
            </a>
            <button type="button" class="btn btn-secondary" wire:click="fetchTodos">
                <span class="refreshmark"></span> Refresh
            </button>
        </div>
    </div>
    <ul class="list-group">
        @foreach($todos as $key => $todo)
            <livewire:todo-item :$todo :key="$todo->id" />
        @endforeach
    </ul>
</div>
