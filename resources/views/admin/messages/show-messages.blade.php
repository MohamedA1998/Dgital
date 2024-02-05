<x-create-modal id='ShowModel' title='Show Message'>
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" disabled wire:model='name' />
    </div>

    <div class="col-md-6 mb-0">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" disabled wire:model='email' />
    </div>

    <div class="col-12 mb-0 mt-4">
        <label class="form-label">Subject</label>
        <input type="text" class="form-control" disabled wire:model='subject' />
    </div>

    <div class="col  mt-4 mb-4">
        <label class="form-label">Description</label>
        <textarea wire:model='message' disabled placeholder="Description" class="form-control"></textarea>
    </div>
</x-create-modal>
