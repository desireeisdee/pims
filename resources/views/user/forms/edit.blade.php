
<x-modal name="edit-account-modal-{{ $account->id }}" max-width="sm">
    <x-card title="Edit Account">
        <div>
            <form action="{{ route('accounts.update', ['account' => $account->id]) }}" method="POST">
                @csrf
                @method('PUT') <!-- Use PUT or PATCH method for updates -->
                <div>
                    <x-input id="personnel_id" label="Personnel ID" class="block mt-1 w-full" type="number" name="personnel_id" value="{{ $account->personnel->personnel_id }}" required/>
                </div>

                <div class="mb-4">
                    <x-input id="email" label="Email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" value="{{ $account->email }}"/>
                </div>

                <div class="mb-4">
                    <x-native-select value="{{ $account->role }}" class="form-control" label="Role" name="role" id="role">
                        <option value="teacher">Personnel</option>
                        <option value="school_head">School Head</option>
                        <option value="admin">Admin</option>
                    </x-native-select>
                </div>

                <div class="mt-6">
                    <div class="flex justify-end gap-x-4">
                        {{-- <x-button flat negative label="Delete" wire:confirm="Are you sure you want to delete this data?" wire:click.prevent="delete({{ $district->id }})" /> --}}

                        <div class="flex space-x-4">
                            <button x-on:click.prevent="close" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-danger hover:bg-[#fa0202d3] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-danger-700">
                                Cancel
                            </button>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-main hover:bg-[#1f2f54] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </x-card>
</x-modal>
