@section('skills-active', 'active')
<x-admin-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center py-2 mb-3">
            <h4 class="fw-bold m-0 p-0">Skills</h4>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateModel">
                Add New Skills
            </button>

            <!-- Modal -->
            @livewire('admin.skills.create-skill-model-component')
        </div>


        <div class="card mb-4">
            <div class="card-body">
                <div class="card">
                    @livewire('admin.skills.skills-component')
                </div>
            </div>
        </div>

        @livewire('admin.skills.update-skill-model-component')

        @livewire('admin.skills.delete-skill-model-component')

        @livewire('admin.skills.show-skill-model-component')
    </div>
</x-admin-layout>
