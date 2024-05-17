
<x-app-layout>
    <x-slot name="header">
        <h2 class="capitalize font-semibold text-xl text-gray-800 leading-tight">
            {{ $school->school_name }}
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto sm:px-6 sm:py-3 lg:px-8 lg:py-5">
        {{-- <ul class="inline-flex space-x-2">
            <li class="text-gray-600">
                <a href="{{ route('admin.home') }}">Dashboard</a>
                >
            </li>
            <li class="text-gray-600">
                <a href="{{ route('schools.index') }}">School</a>
                >
            </li>
            <li class="text-gray-600">
                <a href="#">{{ $school->school_name }}</a>
                >
            </li>
        </ul> --}}

        <div class="my-5 flex justify-between items-center">
            <div class="w-5/6">
                <h3 class="my-5 font-bold text-3xl text-gray-darkest">{{ $school->school_name }}'s Profile</h3>
            </div>

            <div class="ps-11 w-1/6">
                <a href="{{ route('schools.export', $school->id) }}">
                    <x-button label="Export" class="w-32 px-5 bg-primary text-white tracking-wider hover:hover:bg-primary-hover hover:scale-105 duration-100"/>
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div x-data="{ formNav : 'school_information' }" >
            <div class="flex justify-center m-auto bg-white">
                <div class="relative w-full h-full">
                    {{-- FORM--}}
                    <div class="pb-10 absolute top-0 left-0 flex items-center w-[69rem] ml-52">
                        <div class="me-7 bg-white w-full border-2 border-gray-300 border-solid shadow-lg">
                            <section x-show="formNav === 'school_information'" id="school_information">
                                @livewire('form.school-information', ['showMode' => true, 'id' => $school->id])
                            </section>
                            <section x-show="formNav === 'school_resources'" id="school_resources">
                                @livewire('form.school-resource', ['showMode' => true, 'id' => $school->id])
                            </section>
                            <section x-show="formNav === 'appointment_fundings'" id="appointment_fundings">
                                @livewire('form.appointment_funding', ['showMode' => true, 'id' => $school->id])
                            </section>
                            <section x-show="formNav === 'school_personnels'" id="school_personnels">
                                @livewire('form.school_personnel', ['showMode' => true, 'id' => $school->id])
                            </section>
                        </div>
                    </div>
                    {{-- OVERLAPPING MENU --}}
                    <div class="absolute top-0 left-0 mt-6 w-[13rem] bg-gray-100">
                        <div class="w-[13.5rem]"
                            :class="{'w-[13.2rem] z-10 bg-white': formNav === 'school_information' }">
                            <a href="#school_information" @click="formNav = 'school_information'">
                                <div class="px-4 py-2 w-[13.1rem]"
                                     :class="{'border-l-2 border-y-2 border-gray-300 text-primary': formNav === 'school_information' }">
                                    <span class="text-sm font-medium">School Information</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                            :class="{'w-[13.2rem] z-10 bg-white': formNav === 'school_resources' }">
                            <a href="#school_resources" @click="formNav = 'school_resources'">
                                <div class="px-4 py-2 w-[13.1rem]"
                                     :class="{'border-l-2 border-y-2 border-gray-300 text-primary': formNav === 'school_resources' }">
                                    <span class="text-sm font-medium">School Resources</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                            :class="{'w-[13.2rem] z-10 bg-white': formNav === 'appointment_fundings' }">
                            <a href="#appointment_fundings" @click="formNav = 'appointment_fundings'">
                                <div class="px-4 py-2 w-[13.1rem]"
                                     :class="{'border-l-2 border-y-2 border-gray-300 text-primary': formNav === 'appointment_fundings' }">
                                    <span class="text-sm font-medium">Appointment Fundings</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                            :class="{'w-[13.2rem] z-10 bg-white': formNav === 'school_personnels' }">
                            <a href="#school_personnels" @click="formNav = 'school_personnels'">
                                <div class="px-4 py-2 w-[13.1rem]"
                                     :class="{'border-l-2 border-y-2 border-gray-300 text-primary': formNav === 'school_personnels' }">
                                    <span class="text-sm font-medium">School Personnels</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
