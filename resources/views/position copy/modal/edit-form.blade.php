<div>
    <x-modal name="edit-position-modal-{{ $position->id }}" max-width="sm">
        <x-card title="Edit Position">
            <div class="px-2 py-1">
                <form action="{{ route('positions.update',['position' => $position->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <x-input value="{{ $position->title }}" type="text" id="title" name="title" class="form-control shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" label="Title"
                            required/>
                    </div>
                    <div class="mb-4">
                        <x-native-select value="{{ $position->classification }}" class="form-control" name="classification" id="classification" label="Classification" required>
                            <option value="teaching" {{ $position->classification == 'teaching' ? 'selected' : '' }}>Teaching</option>
                            <option value="teaching-related" {{ $position->classification == 'teaching-related' ? 'selected' : '' }}>Teaching-related</option>
                            <option value="non-teaching" {{ $position->classification == 'non-teaching' ? 'selected' : '' }}>Non-teaching</option>
                        </x-native-select>
                    </div>
                    <div class="mb-4">
                        <x-input value="{{ $position->fund_source }}" type="text" id="fund_source" name="fund_source" class="form-control shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 capitalize" label="Fund Source" required/>
                    </div>

                    <div class="mt-6">
                        <div class="flex justify-between gap-x-4">
                            {{-- <x-button flat negative label="Delete" wire:confirm="Are you sure you want to delete this data?" wire:click.prevent="delete({{ $position->id }})" /> --}}

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
</div>
