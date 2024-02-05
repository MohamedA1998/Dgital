<form class="row" wire:submit.prevent='submit'>
    @if (session()->has('message'))
        <div class="alert alert-primary successAlert">
            {{ session('message') }}
        </div>
    @endif

    <div class="col-md-6">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='setting.name' />
        @error('setting.name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Email" wire:model='setting.email' />
        @error('setting.email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" placeholder="Address" wire:model='setting.address' />
        @error('setting.address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" placeholder="Phone" wire:model='setting.phone' />
        @error('setting.phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">Facebook</label>
        <input type="text" class="form-control" placeholder="Facebook" wire:model='setting.facebook' />
        @error('setting.facebook')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">Twitter</label>
        <input type="text" class="form-control" placeholder="Twitter" wire:model='setting.twitter' />
        @error('setting.twitter')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">Instgram</label>
        <input type="text" class="form-control" placeholder="Instgram" wire:model='setting.instagram' />
        @error('setting.instagram')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">LinkedIn</label>
        <input type="text" class="form-control" placeholder="LinkedIn" wire:model='setting.linkedin' />
        @error('setting.linkedin')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-12 mt-4">
        <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>
            <span wire:loading.remove>
                Submit
            </span>

            <span wire:loading wire:target='submit'>
                <span class="spinner-border spinner-border-sm text-white" role="status">
                    <span class="visually-hidden">Loading...</span>
                </span>
            </span>
        </button>
    </div>


</form>
