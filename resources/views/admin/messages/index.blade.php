@section('message-active', 'active')
<x-admin-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center py-2 mb-3">
            <h4 class="fw-bold m-0 p-0">Messages</h4>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="card">
                    @livewire('admin.messages.messages-component')
                </div>
            </div>
        </div>

        @livewire('admin.messages.delete-messages')

        @livewire('admin.messages.show-messages')
    </div>
</x-admin-layout>
