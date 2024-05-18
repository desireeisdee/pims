
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $personnel->fullName() }}'s Profile
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto sm:px-6 sm:py-3 lg:px-8 flex justify-between">
        <div class="w-5/6">
        </div>

        <div class="w-1/6 text-end">
            {{-- <a href="{{ route('personnels.export', $personnel->id) }}"> --}}
                <x-button label="Export" class="w-32 px-5 py-2.5 bg-primary text-white tracking-wider hover:hover:bg-primary-hover hover:scale-105 duration-100"/>
            {{-- </a> --}}
        </div>
    </div>

    <div class="max-w-8xl mx-auto sm:px-6 sm:py-3 lg:px-8">
        @livewire('personnel-navigation', ['personnelId' => $personnel->id])
    </div>
</x-app-layout>
