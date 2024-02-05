<x-create-modal id='ShowModel' title='Show Skill'>
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text" disabled class="form-control" placeholder="Name" wire:model='name' />
    </div>
    <div class="col mb-0">
        <label class="form-label">Progress</label>
        <input type="number" disabled class="form-control" placeholder="10" wire:model='progress' min="1"
            max="100" />
    </div>
</x-create-modal>
