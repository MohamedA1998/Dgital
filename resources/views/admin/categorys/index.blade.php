@section('category-active', 'active')
<x-admin-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center py-2 mb-3">
            <h4 class="fw-bold m-0 p-0">Categorys</h4>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateModel">
                Add New Category
            </button>

        </div>
        <!-- Modal -->
        @livewire('admin.categorys.create-category')

        <div class="card mb-4">
            <div class="card-body">
                <div class="card">
                    @livewire('admin.categorys.category-component')
                </div>
            </div>
        </div>

        @livewire('admin.categorys.delete-category')

        @livewire('admin.categorys.update-category')
    </div>
</x-admin-layout>
