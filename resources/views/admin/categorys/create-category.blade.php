<x-create-modal id='CreateModel' title='Create New Category' buttonName='Submit'>
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />

        <x-error name='name' />
    </div>
</x-create-modal>
