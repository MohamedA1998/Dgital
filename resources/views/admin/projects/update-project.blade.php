<x-create-modal id='EditModel' title='Edit Project' buttonName='Update'>
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        <x-error name='name' />
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Link</label>
        <input type="url" class="form-control" placeholder="Link" wire:model='link' />
        <x-error name='link' />
    </div>

    <div class="col-md-6 mb-0 mt-4">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Image" wire:model='image' />
        <div wire:loading wire:target="image">Uploading...</div>
        <x-error name='image' />
    </div>
    <div class="col-md-6 mb-0 mt-4">
        <label class="form-label">Category</label>
        <select class="form-control" wire:model='category_id'>
            <option value="">Select Category</option>
            @foreach ($categorys as $category)
                <option value="{{ $category->id }}" wire:key='category-{{ $category->id }}'>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <x-error name='category_id' />
    </div>

    @if ($image)
        <div class="my-4">
            <img src="{{ $image->temporaryUrl() }}" width="100%" height="150px">
        </div>
    @endif

    <div class="col-md-12 mt-4 mb-0">
        <label class="form-label">Description</label>
        <textarea wire:model='description' placeholder="Description" class="form-control"></textarea>
        <x-error name='description' />
    </div>
</x-create-modal>
