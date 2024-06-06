
<div x-data="{ formNav: @entangle('formNav')}">


    <div class="px-2 sm:px-6 lg:px-8 my-2.5 flex space-x-3 justify-end">
        <button type="button" class="inline-flex items-center px-5 py-2 mb-2 mr-2 text-sm font-medium text-center text-gray-900 bg-gray-50 border border-slate-200 rounded-lg hover:bg-white hover:scale-105 duration-300">
        <a href="{{ route('pds.export', $personnelId) }}">
            <span class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
                </svg>
                <p>Export</p>
            </span>
        </a>
        </button>
       {{-- @if(Auth::user()->role == 'admin')
       <button x-on:click.prevent="$openModal('myModal')"
       class="inline-flex items-center px-5 py-2 mb-2 mr-2 text-sm font-medium text-center text-white bg-danger border border-red-600 rounded-lg hover:bg-red-500 hover:scale-105 duration-300">
       <span class="flex items-center">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 h-5">
               <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
           </svg>
           <p>Delete</p>
       </span>
   </button>
       @endif --}}
    </div>

    <div class="mx-8 bg-white shadow-xl sm:rounded-lg">
        <div class="flex">
            <div class="w-2/12 py-2">
                <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'personal_information'}">
                    <a @click="formNav = 'personal_information'" href="#personal_information">
                        <div class="px-8 py-2 w-[14.4rem]">
                            <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'personal_information'}">Personal Information</span>
                        </div>
                    </a>
                </div>

                <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'address'}">
                    <a @click="formNav = 'address'" href="#address">
                        <div class="px-8 py-2 w-[14.4rem]">
                            <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'address'}">Address</span>
                        </div>
                    </a>
                </div>

        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'family'}">
            <a @click="formNav = 'family'" href="#family">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'family'}">Family</span>
                </div>
            </a>
        </div>

        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'education'}">
            <a @click="formNav = 'education'" href="#education">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'education'}">Education</span>
                </div>
            </a>
        </div>

        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'civil_service_eligibility'}">
            <a @click="formNav = 'civil_service_eligibility'" href="#civil_service_eligibility">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'civil_service_eligibility'}">Civil Service Eligibility</span>
                </div>
            </a>
        </div>

        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'work_experience'}">
            <a @click="formNav = 'work_experience'" href="#work_experience">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'work_experience'}">Work Experience</span>
                </div>
            </a>
        </div>
        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'voluntary_work'}">
            <a @click="formNav = 'voluntary_work'" href="#voluntary_work">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'voluntary_work'}">Voluntary Work</span>
                </div>
            </a>
        </div>

        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'training_certification'}">
            <a @click="formNav = 'training_certification'" href="#training_certification">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'training_certification'}">Training & Certifications</span>
                </div>
            </a>
        </div>

        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'other_information'}">
            <a @click="formNav = 'other_information'" href="#other_information">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'other_information'}">Other Information</span>
                </div>
            </a>
        </div>


        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'questionnaire'}">
            <a @click="formNav = 'questionnaire'" href="#questionnaire">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'questionnaire'}">Questionnaire</span>
                </div>
            </a>
        </div>

        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'references'}">
            <a @click="formNav = 'references'" href="#references">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'references'}">References</span>
                </div>
            </a>
        </div>

        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'assignment_details'}">
            <a @click="formNav = 'assignment_details'" href="#assignment_details">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'assignment_details'}">Assignment Details</span>
                </div>
            </a>
        </div>
        <div class="w-full" :class="{'w-[14.5rem] z-10 bg-white': formNav === 'history'}">
            <a @click="formNav = 'history'" href="#history">
                <div class="px-8 py-2 w-[14.4rem]">
                    <span class="text-sm font-medium" :class="{'decoration-dandelion underline underline-offset-4 decoration-2 ': formNav === 'history'}">History</span>
                </div>
            </a>
        </div>
    </div>

            <div class="w-10/12 bg-white h-[32rem] overflow-y-auto">
                <section x-show="formNav === 'personal_information'" id="personal_information">
                    @livewire('form.personal-information-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'address'" id="address">
                    @livewire('form.address-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'family'" id="family">
                    @livewire('form.family-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'education'" id="education">
                    @livewire('form.education-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'civil_service_eligibility'" id="civil_service_eligibility">
                    @livewire('form.civil-service-eligibility-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'work_experience'" id="work_experience">
                    @livewire('form.work-experience-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'voluntary_work'" id="voluntary_work">
                    @livewire('form.voluntary-work-form', ['id' => $personnelId, 'showMode' => true])
                </section>

                <section x-show="formNav === 'training_certification'" id="training_certification">
                    @livewire('form.training-certification-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'other_information'" id="other_information">
                    @livewire('form.other-information-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'questionnaire'" id="questionnaire">
                    @livewire('form.questionnaire-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'references'" id="references">
                    @livewire('form.references-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'assignment_details'" id="assignment_details">
                    @livewire('form.assignment-details-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'award_received'" id="award_received">
                    @livewire('form.award-received-form', ['id' => $personnelId, 'showMode' => true])
                </section>
                <section x-show="formNav === 'history'" id="history">
                    @livewire('form.history', ['id' => $personnelId, 'showMode' => true])
                </section>
            </div>
        </div>
    </div>

</div>
