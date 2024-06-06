
<nav class="fixed w-full z-10 bg-[#0f152a] shadow-xl">
    {{-- <div class="max-w-7xl mx-3 px-4 sm:px-6 lg:px-3"> --}}
    <div class="mx-2 px-4 sm:px-6 lg:px-3">
        <div class="flex justify-between items-center h-12 text-white">
            <div class="flex space-x-3 p-0">
                <span class="m-0 p-0">
                    <img src="{{ asset('image/sd-pms-logo.png') }}" alt="sd-pmis-logo" class="h-10 w-[10rem] my-1 text-xs">
                </span>

                <div class="hidden space-x-4 sm:-my-px sm:ms-6 sm:flex items-center">
                    @php
                        $user = Auth::user();
                        $role = $user->role;
                        $personnel = $user->personnel;
                    @endphp

                    @if ($role == "admin")
                    <x-nav-link href="{{ route('admin.home') }}" :active="request()->routeIs('admin.home')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('schools.index') }}" :active="request()->routeIs('schools.index')">
                        {{ __('Schools') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('personnels.index') }}" :active="request()->routeIs('personnels.index')">
                        {{ __('Personnels') }}
                    </x-nav-link>

                    <x-dropdown>
                        <x-slot name="trigger">
                            <a class="m-0 bg-none text-gray-300 {{ $active ?? false
                                ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#FCC008] text-sm font-medium leading-5 text-gray-100 focus:outline-none focus:border-[#FCC008] transition duration-150 ease-in-out'
                                : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-50 hover:text-white hover:border-[#FCC008] focus:outline-none focus:text-gray-700 focus:border-[#FCC008] transition duration-150 ease-in-out' }}">
                                Others
                            </a>
                        </x-slot>

                        <x-dropdown.item label="District" href="{{ route('districts.index') }}" :active="request()->routeIs('districts.index')"/>
                        <x-dropdown.item separator label="Position" href="{{ route('positions.index') }}" :active="request()->routeIs('positions.index')"/>
                    </x-dropdown>

                    <x-nav-link href="{{ route('accounts.index') }}" :active="request()->routeIs('accounts  .index')">
                        {{ __('Accounts') }}
                    </x-nav-link>
                    @endif

                    @if ($role == "school_head")
                    <x-nav-link href="{{ route('schools.show', ['school' => Auth::user()->personnel->school]) }}" :active="request()->routeIs('schools.show')">
                        {{ __('Schools') }}
                    </x-nav-link>

                    <x-nav-link  href="{{ route('personnels.profile', ['personnel' => Auth::user()->personnel->id]) }}" :active="request()->routeIs('personnels.profile', ['personnel' => Auth::user()->personnel->id])">
                        {{ __('Profile') }}
                    </x-nav-link>
                    @endif

                    @if ($role == "teacher")
                    <x-nav-link href="{{ route('personnel.profile', ['personnel' => Auth::user()->personnel->id]) }}"
                        :active="request()->routeIs('personnel.profile', ['personnel' => Auth::user()->personnel->id])">
                        {{ __('Profile') }}
                    </x-nav-link>
                    @endif





                </div>
           </div>

           <div class="flex items-center space-x-2">
                {{-- notification --}}
                {{-- <div class="relative" x-data="{ open: false}">
                    <button @click="open = !open" class="flex items-center p-1 hover:scale-110 hover:bg-[#18203b9e] hover:rounded-full duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-100">
                            <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <ul x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90"
                        @click.away="open = false"
                        class="absolute right-0 z-20 w-52 mt-2 py-1 bg-white rounded shadow border font-normal text-gray-500">
                        <li>
                            <a href="#" class="flex items-center justify-center py-2 hover:bg-gray-200">
                                <span class="ml-2 text-xs">Tom liked one of your comments</span>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                {{-- profile  --}}
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center rounded-full">
                        {{-- <x-user-icon></x-user-icon> --}}
                        <x-avatar md label="{{ Auth::user()->personnel->school->school_name[0] }}{{ Auth::user()->personnel->first_name[0] }}" />
                    </button>


                    <ul x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90"
                        @click.away="open = false"
                        class="absolute z-20 right-0 w-48 mt-2 py-1 bg-white rounded shadow border font-normal text-gray-500">
                        <li class="border-gray-400">
                            <a href="{{ route('logout') }}" class="flex items-center px-3 py-1.5 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                                </svg>
                                <span class="ml-2 text-sm">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
           </div>
        </div>
    </div>
</nav>
