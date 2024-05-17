<!-- Delete Appointments Funding Modal -->
<x-dialog-modal wire:model.live="confirmingAppointmentsFundingDeletion">
    <x-slot name="title">
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Are you sure you want to delete appointments funding: ') . $confirmingAppointmentsFundingDeletion . '?' }}
    </x-slot>

    <x-slot name="footer">
        <x-button wire:click.prevent="$toggle('confirmingAppointmentsFundingDeletion')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-button>

        <x-button class="ms-3" wire:click.prevent="deleteAppointmentsFunding" wire:loading.attr="disabled">
            {{ __('Delete Account') }}
        </x-button>
    </x-slot>
</x-dialog-modal>
