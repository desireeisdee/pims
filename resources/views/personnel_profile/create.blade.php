
<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>



    <div class="max-w-8xl mx-auto sm:px-6 sm:py-3 lg:px-8 lg:py-5">
        {{-- @include('personnel_profile.form.personnel') --}}
        <livewire:form.personnel-profile user-id="1"/>
    </div>


</x-teacher-layout>
