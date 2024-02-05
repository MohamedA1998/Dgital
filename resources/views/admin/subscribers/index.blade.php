@section('subscribers-active', 'active')
<x-admin-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center py-2 mb-3">
            <h4 class="fw-bold m-0 p-0">Subscribers</h4>
        </div>


        <div class="card mb-4">
            <div class="card-body">
                <div class="card">
                    @livewire('admin.subscribers.subscribers')
                </div>
            </div>
        </div>

        @livewire('admin.subscribers.delete-subscribers')
    </div>
</x-admin-layout>
