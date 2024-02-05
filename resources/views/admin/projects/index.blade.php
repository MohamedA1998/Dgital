@section('projects-active', 'active')
<x-admin-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center py-2 mb-3">
            <h4 class="fw-bold m-0 p-0">Projects</h4>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateModel">
                Add New Projects
            </button>

            <!-- Modal -->
            @livewire('admin.projects.create-project')
        </div>


        <div class="card mb-4">
            <div class="card-body">
                <div class="card">
                    @livewire('admin.projects.projects-component')
                </div>
            </div>
        </div>

        @livewire('admin.projects.update-project')

        @livewire('admin.projects.delete-project')
    </div>
</x-admin-layout>
