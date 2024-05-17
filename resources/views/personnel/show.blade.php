
<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-8xl mx-auto sm:px-6 sm:py-3 lg:px-8 lg:py-5">
        <div x-data="{ formNav : 'personal_information' }" >
            <div class="flex justify-center m-auto bg-white">
                <div class="relative w-full h-full">
                    {{-- OVERLAPPING MENU --}}
                    <div class="absolute top-0 left-0 mt-6 w-[13rem] bg-gray-100">
                        <div class="w-[13.5rem]"
                            :class="{'w-[13.2rem] z-10 bg-white': formNav === 'personal_information' }">
                            <a href="#personal_information" @click="formNav = 'personal_information'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'personal_information' }">
                                    <span class="text-sm font-medium">Personal Information</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'address' }">
                            <a href="#address" @click="formNav = 'address'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'address' }">
                                     <span class="text-sm font-medium">Address</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'family' }">
                            <a href="#family" @click="formNav = 'family'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'family' }">
                                     <span class="text-sm font-medium">Family</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'education' }">
                            <a href="#education" @click="formNav = 'education'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'education' }">
                                     <span class="text-sm font-medium">Education</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'civil_service_eligibility' }">
                            <a href="#civil_service_eligibility" @click="formNav = 'civil_service_eligibility'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'civil_service_eligibility' }">
                                     <span class="text-sm font-medium">Civil Service Eligibility</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'work_experience' }">
                            <a href="#work_experience" @click="formNav = 'work_experience'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'work_experience' }">
                                     <span class="text-sm font-medium">Work Experience</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'voluntary_work' }">
                            <a href="#voluntary_work" @click="formNav = 'voluntary_work'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'voluntary_work' }">
                                     <span class="text-sm font-medium">Voluntary Work</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'training_certification' }">
                            <a href="#training_certification" @click="formNav = 'training_certification'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'training_certification' }">
                                     <span class="text-sm font-medium">Training & Certification</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'references' }">
                            <a href="#references" @click="formNav = 'references'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'references' }">
                                     <span class="text-sm font-medium">References</span>
                                </div>
                            </a>
                        </div>
                        <div class="w-[13.5rem]"
                             :class="{'w-[13.5rem] z-10 bg-white': formNav === 'assignment_details' }">
                            <a href="#assignment_details" @click="formNav = 'assignment_details'">
                                <div class="px-4 py-2 w-[13.1rem] "
                                     :class="{'border-l-2 border-y-2 border-primary': formNav === 'assignment_details' }">
                                     <span class="text-sm font-medium">Assignment Details</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-teacher-layout>
