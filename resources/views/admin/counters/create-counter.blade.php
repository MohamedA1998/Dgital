<x-create-modal id='CreateModel' title='Create New Counter' buttonName='Submit'>
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />

        <x-error name='name' />
    </div>

    <div class="col mb-0">
        <label class="form-label">Count</label>
        <input type="number" class="form-control" placeholder="1111" wire:model='count' min="1" />

        <x-error name='count' />
    </div>

    <div class="col mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="fa-brands fa-laravel" wire:model='icon' />

        <x-error name='icon' />
    </div>
</x-create-modal>
