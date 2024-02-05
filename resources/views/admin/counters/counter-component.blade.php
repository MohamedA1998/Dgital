<div>
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>

    <div class="table-responsive text-nowrap">
        @if (count($counters))
            <table class="table">
                <thead>
                    <tr>
                        <th width='30%'>Name</th>
                        <th width='30%'>Count</th>
                        <th width='30%'>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($counters as $counter)
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $counter->name }}</strong>
                            </td>
                            <td>{{ $counter->count }}</td>
                            <td>{{ $counter->icon }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('EditCounter', {counter:{{ $counter }}})">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>

                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('DeleteCounter', {counter:{{ $counter }}})">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $counters->links() }}
        @else
            <span class="text-danger">No Skills Yet ...</span>
        @endif
    </div>
</div>
