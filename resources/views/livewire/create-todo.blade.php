<div class="container mt-5">
    <h1 class="text-center">Create New Todo</h1>
    @if (session()->has('status'))
    <div class="alert alert-success" wire:transition>{{ session('status') }}</div>
    @endif
    <form wire:submit.prevent="submitForm">
        <div class="form-group">
            <label for="todoTitle">Todo Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="todoDescription" placeholder="Enter todo description" wire:model="description">
            <div>
            @error('description') 
            <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="todoPriority">Priority</label>
            <select class="form-control @error('priority') is-invalid @enderror" id="todoPriority" wire:model="priority">
                <option value="" selected="selected" disabled="disabled">Select todo priority</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            @error('priority') 
            <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">
            <span class="floppydisk" wire:loading.remove> Save</span>
            <span class="hourglass" wire:loading> Saving...</span>
        </button>
        <a href="/" class="btn btn-secondary ml-2" wire:navigate>
            <span class="rightarrow-hooked"> Back</span>
        </a>
    </form>
</div>