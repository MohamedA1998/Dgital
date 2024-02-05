<x-create-modal id='ShowModel' title='Show Service'>
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" disabled placeholder="Name" wire:model='name' />
    </div>

    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" disabled placeholder="fa-brands fa-laravel" wire:model='icon' />
    </div>

    <div class="col mb-0 mt-4">
        <label class="form-label">Description</label>
        <textarea wire:model='description' disabled placeholder="Description" class="form-control"></textarea>
    </div>
</x-create-modal>
