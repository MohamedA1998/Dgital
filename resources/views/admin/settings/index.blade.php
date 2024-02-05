@section('settings-active', 'active')
<x-admin-layout>
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-2 mb-3">Settings</h4>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.settings.settings-component')
            </div>
        </div>

    </div>
</x-admin-layout>
