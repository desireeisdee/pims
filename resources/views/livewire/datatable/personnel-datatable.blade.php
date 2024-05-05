<div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
<div class="py-3">
    <div class="flex space-x-3 items-center">
        <div class="w-1/6">
            <button class="py-3.5 px-4 w-full text-sm leading-none bg-primary text-gray-lightest font-medium rounded hover:bg-gray-200 focus:outline-none">New Personnel</button>
        </div>
        <div class="flex w-5/6 items-center rounded-md border border-gray-400 bg-white focus:bg-white focus:border-gray-500">
            <div class="pl-2">
                <svg viewBox="0 0 24 24" class="h-4 w-5 items-center fill-current text-gray-500">
                    <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                    </path>
                </svg>
            </div>
            <input type="text" wire:model.live.debounce.300ms="search"
                   placeholder="Search"
                   class="appearance-none items-center rounded-md border-b block pl-2 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
        </div>
    </div>

    <div class="mt-5 overflow-x-auto">
        <table class="w-full whitespace-nowrap">
            <thead>
                <tr class="focus:outline-none h-10 border border-gray-100 bg-gray-lightest">
                    <th wire:click="doSort('id')" class="px-5 py-2 whitespace-nowrap">
                        <div>
                            <button class="flex items-center gap-x-2" sortColumn="$sortColumn" sortDirection="$sortDirection" columnName="id">
                                <span class="text-xs text-gray-dark font-semibold uppercase">#</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th wire:click="doSort('personnel_id')" class="py-2 whitespace-nowrap">
                        <div>
                            <button class="flex items-center gap-x-2" sortColumn="$sortColumn" sortDirection="$sortDirection" columnName="personnel_id">
                                <span class="text-xs text-gray-dark font-semibold uppercase">Personnel ID</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th wire:click="doSort('name')" class="py-2 whitespace-nowrap">
                        <div>
                            <button class="flex items-center gap-x-2" sortColumn="$sortColumn" sortDirection="$sortDirection" columnName="name">
                                <span class="text-xs text-gray-dark font-semibold uppercase">Name</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th wire:click="doSort('job_title')" class="py-2 whitespace-nowrap">
                        <div>
                            <button class="flex items-center gap-x-2" sortColumn="$sortColumn" sortDirection="$sortDirection" columnName="job_title">
                                <span class="text-xs text-gray-dark font-semibold uppercase">Job Title</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th wire:click="doSort('phone')" class="py-2 whitespace-nowrap">
                        <div>
                            <button class="flex items-center gap-x-2" sortColumn="$sortColumn" sortDirection="$sortDirection" columnName="phone">
                                <span class="text-xs text-gray-dark font-semibold uppercase">Phone</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th wire:click="doSort('email')" class="py-2 whitespace-nowrap">
                        <div>
                            <button class="flex items-center gap-x-2" sortColumn="$sortColumn" sortDirection="$sortDirection" columnName="email">
                                <span class="text-xs text-gray-dark font-semibold uppercase">Email</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th class="font-semibold"></th>
                </tr>
                <tr class="h-3"></tr>
            </thead>
            <tbody>
                @foreach ( $personnels as $personnel)
                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded hover:bg-gray-lightest hover:border-gray-200 duration-300">
                        <td class="px-5">
                            <p class="text-sm leading-none text-gray-600">{{ $personnel->id }}</p>
                        </td>
                        <td>
                            <p class="text-sm leading-none text-gray-600">{{ $personnel->personnel_id }}</p>
                        </td>
                        <td>
                            <p class="text-base font-medium leading-none text-gray-700">{{ $personnel->fullName() }}</p>
                        </td>
                        <td>
                            <p class="text-sm leading-none text-gray-600">{{ $personnel->job_title }}</p>
                        </td>
                        <td>
                            <p class="text-sm leading-none text-gray-600">{{ $personnel->phone }}</p>
                        </td>
                        <td>
                            <p class="text-sm leading-none text-gray-600">{{ $personnel->email }}</p>
                        </td>
                        <td>
                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-4 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">View</button>
                        </td>
                    </tr>
                    <tr class="h-2"></tr>
                @endforeach
                @if ($personnels->isEmpty())
                    <tr>
                        <td colspan="8" class="p-2 w-full text-center">
                            <p class="leading-none text-gray-600">No Personnel Found</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        {{ $personnels->links() }}
    </div>
</div>
