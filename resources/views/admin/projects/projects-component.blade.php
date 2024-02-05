<div>
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>

    <div class="table-responsive text-nowrap">
        @if (count($projects))
            <table class="table">
                <thead>
                    <tr>
                        <th width='40%'>Name</th>
                        <th width='20%'>Category</th>
                        <th width='30%'>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $project->name }}</strong>
                            </td>
                            <td>{{ $project->category?->name }}</td>
                            <td>
                                <img src="{{ asset($project->image) }}" alt="" height="70px" width="70px">
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('EditProject', {project:{{ $project }}})">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>

                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('DeleteProject', {project:{{ $project }}})">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $projects->links() }}
        @else
            <span class="text-danger">No Skills Yet ...</span>
        @endif
    </div>
</div>
