<x-create-modal id='EditModel' title='Edit Skill' buttonName='Submit'>
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />

        <x-error name='name' />
    </div>
    <div class="col mb-0">
        <label class="form-label">Progress</label>
        <input type="number" class="form-control" placeholder="10" wire:model='progress' min="1"
            max="100" />

        <x-error name='progress' />
    </div>
</x-create-modal>
