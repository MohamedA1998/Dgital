<x-create-modal id='EditModel' title='Edit Service' buttonName='Submit'>
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />

        <x-error name='name' />
    </div>

    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="fa-brands fa-laravel" wire:model='icon' />

        <x-error name='icon' />
    </div>

    <div class="col mb-0 mt-4">
        <label class="form-label">Description</label>
        <textarea wire:model='description' placeholder="Description" class="form-control"></textarea>

        <x-error name='description' />
    </div>
</x-create-modal>
