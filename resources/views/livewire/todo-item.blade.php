<li class="list-group-item todo-item" wire:transition>
    <div class="d-flex justify-content-between align-items-center">
        @if($todo->priority == "low")<span class="lowpriority"></span>@endif
        @if($todo->priority == "medium")<span class="mediumpriority"></span>@endif
        @if($todo->priority == "high")<span class="highpriority"></span>@endif
        <h4>{{ $todo->description }}</h4>
        @if($todo->complete)
        <span class="ballotbox-checked badge bg-success pt-2 pb-2 pl-2 pr-2"> Done</span>
        @else
        <span class="ballotbox badge bg-warning pt-2 pb-2 pl-2 pr-2"> Pending</span>
        <button type="button" wire:click="markAsComplete" class="btn btn-primary btn-sm">
            <span class="checkmark"></span> Mark as Complete
        </button>
        @endif
        <button type="button" class="btn btn-danger btn-sm" wire:click="delete" wire:confirm="Are you sure you want to delete this item?">
            <span class="crossmark"></span> Delete
        </button>
    </div>
</li>