@props(['name', 'targetMethod'])
<span wire:loading.remove>
    {{ $name }}
</span>

<div class="text-center" wire:loading wire:target='submit'>
    <span class="spinner-border spinner-border-sm text-white" role="status">
        <span class="visually-hidden">Loading...</span>
    </span>
</div>
{{-- <x-btn-name-with-loading name='Sign in' targetMethod='submit'/> --}}
