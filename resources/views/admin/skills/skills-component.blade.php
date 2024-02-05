<div>
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>

    <div class="table-responsive text-nowrap">
        @if (count($skills))
            <table class="table">
                <thead>
                    <tr>
                        <th width='45%'>Name</th>
                        <th width='45%'>Progress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($skills as $skill)
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $skill->name }}</strong>
                            </td>
                            <td>{{ $skill->progress }} %</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('ShowSkill', {skill:{{ $skill }}})">
                                            <i class="bx bx-show me-1"></i>
                                            Show</a>

                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('UpdateSkill', {skill:{{ $skill }}})">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>

                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('DeleteSkill', {skill:{{ $skill }}})">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $skills->links() }}
        @else
            <span class="text-danger">No Skills Yet ...</span>
        @endif
    </div>
</div>
