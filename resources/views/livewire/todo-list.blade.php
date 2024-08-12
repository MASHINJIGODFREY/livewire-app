<div class="container mt-5">
    <h1 class="text-center">Todo List</h1>
    <div class="row justify-content-md-center" wire:offline wire:transition>
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Offline Mode</h4>
            <p>It looks like you're not connected to the internet. Please check your connection or try again later. Some features may be unavailable while you're offline.</p>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col text-right">
            <a href="/create" class="btn btn-primary" wire:navigate>
                <span class="plusmark"> Create</span>
            </a>
            <button type="button" class="btn btn-secondary" wire:click="fetchTodos">
                <span class="refreshmark" wire:loading.remove wire:target="fetchTodos"> Refresh</span>
                <span class="hourglass" wire:loading wire:target="fetchTodos"> Refreshing...</span>
            </button>
        </div>
    </div>
    <ul class="list-group">
        @foreach($todos as $key => $todo)
            <livewire:todo-item :$todo key="{{ now() }}" />
        @endforeach
    </ul>
</div>
