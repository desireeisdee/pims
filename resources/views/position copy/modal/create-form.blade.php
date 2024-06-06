<x-modal name="create-position-modal" max-width="sm">
    <x-card title="Create New Position">
        <div class="px-2 py-1">
            <form action="{{ route('positions.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <x-input type="text" id="title" name="title" class="form-control shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" label="Title"/>
                </div>
                <div class="mb-4">
                    <x-native-select class="form-control" name="classification" id="classification" label="Classification">
                        <option value="teaching">Teaching</option>
                        <option value="teaching-related">Teaching-related</option>
                        <option value="non-teaching">Non-teaching</option>
                    </x-native-select>
                </div>
                <div class="mb-6">
                    <x-input type="text" id="fund_source" name="fund_source" class="form-control shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" label="Fund Source"/>
                </div>
                <div class="flex justify-end gap-x-4">
                    <div class="w-1/4">
                        <x-button x-on:click="close" label="Cancel" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-danger hover:bg-[#fa0202d3] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-danger-700"/>
                    </div>
                    <div class="w-1/4">
                        <x-button type="submit" label="Create" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-main hover:bg-[#1f2f54] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700"/>
                    </div>
                </div>
            </form>
        </div>
    </x-card>
</x-modal>
