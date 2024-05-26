<div>
    <h4 class="font-bold text-2xl text-gray-darkest">Edit Work Experience</h4>
    <div class="mt-5">
        <div>
            <div class="mt-2">
                @if (count($personnel->workExperiences))
                    @foreach ($old_work_experiences as $index => $old_work_experience)
                        <div class="mb-2 px-3 py-2 w-full space-x-3 h-40 border border-gray-200 rounded focus:outline-none">
                            <div class="mb-3 flex space-x-2">
                                <div class="w-4/12 flex space-x-2">
                                    <div class="w-1/2">
                                        <x-input id="inclusive_from_{{ $index }}" type="date" wire:model="old_work_experiences.{{ $index }}.inclusive_from" name="old_work_experiences[{{ $index }}][inclusive_from]" label="Start Date" required/>
                                    </div>
                                    <div class="w-1/2">
                                        <x-input id="inclusive_to_{{ $index }}" type="date" wire:model="old_work_experiences.{{ $index }}.inclusive_to" name="old_work_experiences[{{ $index }}][inclusive_to]" label="End Date" required/>
                                    </div>
                                </div>
                                <div class="w-4/12">
                                    <x-input id="title_{{ $index }}" type="text" wire:model="old_work_experiences.{{ $index }}.title" name="old_work_experiences[{{ $index }}][title]" label="Position Title" required/>
                                </div>
                                <div class="w-4/12">
                                    <x-input id="company_{{ $index }}" type="text" wire:model="old_work_experiences.{{ $index }}.company" name="old_work_experiences[{{ $index }}][company]" label="Department/Company" required/>
                                </div>
                            </div>
                            <div class="mb-3 flex space-x-2">
                                <div class="w-3/12">
                                    <x-input id="monthly_salary_{{ $index }}" type="text" wire:model="old_work_experiences.{{ $index }}.monthly_salary" name="old_work_experiences[{{ $index }}][monthly_salary]" label="Monthly Salary" required/>
                                </div>
                                <div class="w-3/12">
                                    <x-input id="paygrade_step_increment_{{ $index }}" type="text" wire:model="old_work_experiences.{{ $index }}.paygrade_step_increment" name="old_work_experiences[{{ $index }}][paygrade_step_increment]" label="Pay Grade/Step Increment" required/>
                                </div>
                                <div class="w-4/12">
                                    <x-input id="appointment_{{ $index }}" type="text" wire:model="old_work_experiences.{{ $index }}.appointment" name="old_work_experiences[{{ $index }}][appointment]" label="Appointment" required/>
                                </div>
                                <div class="w-2/12">
                                    <x-input id="is_gov_service_{{ $index }}" type="text" wire:model="old_work_experiences.{{ $index }}.is_gov_service" name="old_work_experiences[{{ $index }}][is_gov_service]" label="Govm't Service (Yes/No)" required/>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                <!-- New Data Children -->
                @foreach ($new_work_experiences as $index => $work_experience)
                    <div class="mb-2 px-3 py-2 w-full space-x-3 h-40 border border-gray-200 rounded focus:outline-none">
                        <div class="mb-3 flex space-x-2">
                            <div class="w-4/12 flex space-x-2">
                                <div class="w-1/2">
                                    <x-input id="inclusive_from_{{ $index }}" type="date" wire:model="new_work_experiences.{{ $index }}.inclusive_from" name="new_work_experiences[{{ $index }}][inclusive_from]" label="Start Date" required/>
                                </div>
                                <div class="w-1/2">
                                    <x-input id="inclusive_to_{{ $index }}" type="date" wire:model="new_work_experiences.{{ $index }}.inclusive_to" name="new_work_experiences[{{ $index }}][inclusive_to]" label="End Date" required/>
                                </div>
                            </div>
                            <div class="w-4/12">
                                <x-input id="title_{{ $index }}" type="text" wire:model="new_work_experiences.{{ $index }}.title" name="new_work_experiences[{{ $index }}][title]" label="Position Title" required/>
                            </div>
                            <div class="w-4/12">
                                <x-input id="company_{{ $index }}" type="text" wire:model="new_work_experiences.{{ $index }}.company" name="new_work_experiences[{{ $index }}][company]" label="Department/Company" required/>
                            </div>
                        </div>
                        <div class="mb-3 flex space-x-2">
                            <div class="w-3/12">
                                <x-input id="monthly_salary_{{ $index }}" type="text" wire:model="new_work_experiences.{{ $index }}.monthly_salary" name="new_work_experiences[{{ $index }}][monthly_salary]" label="Monthly Salary" required/>
                            </div>
                            <div class="w-3/12">
                                <x-input id="paygrade_step_increment_{{ $index }}" type="text" wire:model="new_work_experiences.{{ $index }}.paygrade_step_increment" name="new_work_experiences[{{ $index }}][paygrade_step_increment]" label="Pay Grade/Step Increment" required/>
                            </div>
                            <div class="w-4/12">
                                <x-input id="appointment_{{ $index }}" type="text" wire:model="new_work_experiences.{{ $index }}.appointment" name="new_work_experiences[{{ $index }}][appointment]" label="Appointment" required/>
                            </div>
                            <div class="w-2/12">
                                <x-input id="is_gov_service_{{ $index }}" type="text" wire:model="new_work_experiences.{{ $index }}.is_gov_service" name="new_work_experiences[{{ $index }}][is_gov_service]" label="Govm't Service (Yes/No)" required/>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="mt-3 flex space-x-3 items-center">
                    <div class="w-full">
                        <x-button wire:click.prevent="addField" label="Add New" class="py-2 w-full text-base bg-primary text-white tracking-wide font-medium rounded hover:bg-[#334979] hover:text-white duration-300 focus:outline-none"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 p-0 flex space-x-3 justify-end">
        <div class="w-2/12">
            <x-button wire:click.prevent="cancel" label="Cancel" class="px-5 py-2.5 w-full bg-danger font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-red-600 hover:scale-105 duration-150"/>
        </div>
        <div class="w-2/12">
            <x-button wire:click.prevent="save" label="Save" class="px-5 py-2.5 w-full bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
        </div>
    </div>
</div>
