<!-- Delete Appointments Funding Modal -->
<x-dialog-modal wire:model.live="confirmingFundedItemDeletion">
    <x-slot name="title">
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Are you sure you want to delete appointments funding: ') . $confirmingFundedItemDeletion . '?' }}
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click.prevent="$toggle('confirmingFundedItemDeletion')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-danger-button class="ms-3" wire:click.prevent="deleteFundedItem" wire:loading.attr="disabled">
            {{ __('Delete Account') }}
        </x-danger-button>
    </x-slot>
</x-dialog-modal>
