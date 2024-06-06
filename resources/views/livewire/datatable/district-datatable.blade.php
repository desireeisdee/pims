<div class="mx-5 my-8 p-3">
    <div class="flex justify-between">
        <div class="w-1/4 inline-flex space-x-4">
            <a href="#" x-on:click="$openModal('create-district-modal')">
                <button class="w-[9rem] py-2 px-4 bg-main font-medium text-sm tracking-wider rounded-md border-2 hover:bg-blue-900 text-white duration-300">
                    Add district
                </button>
            </a>
        </div>

        <div class="w-1/4">
            <div class="pt-2 relative mx-auto text-gray-600">
                <input wire:model.live.debounce.300ms="search" placeholder="Search" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 w-full rounded-lg text-sm focus:outline-none"
                  type="search" name="search" id="search">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                  <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                      d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                  </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="mt-5 overflow-x-auto">
        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                <tr>
                    <th wire:click="doSort('id')" class="w-1/12 p-2 whitespace-nowrap">
                        <div class="flex items-center gap-x-3">
                            <button class="flex items-center gap-x-2" sortColumn="$sortColumn" sortDirection="$sortDirection" columnName="school_is">
                                <span class="font-semibold text-left">ID</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th class="p-2 whitespace-nowrap w-5/12" wire:click="doSort('name')">
                        <div class="flex items-center gap-x-3">
                            <button class="flex items-center gap-x-2">
                                <span class="font-semibold text-left">Name</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th class="p-2 whitespace-nowrap w-1/12">
                        <div class="flex items-center gap-x-3">
                            <button class="flex items-center gap-x-2">
                                <span class="font-semibold text-left">Action</span>
                            </button>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-sm">
                @foreach ( $districts as $district)

                <tr wire:loading.class="opacity-75">
                    <td class="p-2 whitespace-nowrap w-1/12">
                        <div class="text-left">{{ $district->id }}</div>
                    </td>
                    <td class="p-2 whitespace-nowrap w-5/12">
                        <div class="text-left">{{ $district->name }}</div>
                    </td>
                    @include('district.modal.edit-form')
                    <td class="p-2 whitespace-nowrap w-2/12">
                        <div class="flex justify-between space-x-3">
                            <a href="#" x-on:click="$openModal('edit-district-modal-{{ $district->id }}', { district: '{{ $district->id }}' })">
                                <button class="py-1 px-4 bg-white font-medium text-sm tracking-wider rounded-md border-2 border-main hover:bg-main hover:text-white text-main duration-300">
                                    View
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @if ($districts->isEmpty())
                    <tr wire:loading.class="opacity-75">
                        <td colspan="5" class="p-2 w-full text-center">No Record Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        {{ $districts->links() }}
    </div>
    @include('district.modal.create-form')
</div>
