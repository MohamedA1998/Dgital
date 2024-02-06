<form wire:submit.prevent='submit'>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Your Name" wire:model='name'>
                <label for="name">Your Name</label>
                <x-error name='name' />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Your Email" wire:model='email'>
                <label for="email">Your Email</label>
                <x-error name='email' />
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="subject" placeholder="Subject" wire:model='subject'>
                <label for="subject">Subject</label>
                <x-error name='subject' />
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" wire:model='message'
                    style="height: 150px"></textarea>
                <label for="message">Message</label>
                <x-error name='message' />
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Send
                Message</button>
        </div>
    </div>
</form>
