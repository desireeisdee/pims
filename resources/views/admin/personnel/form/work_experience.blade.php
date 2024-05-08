<div class="mx-auto pt-3 pb-10 px-5">
    <h4 class="font-bold text-2xl text-gray-darkest">Work Experience</h4>
    <div class="mt-5" x-data='civilServiceFields()'>
        <div class="mt-3">
            <div class="mt-2">
                <template x-for="(new_civil_service, index) in new_civil_services" :key="index">
                    <div class="mb-4 px-4 py-4 focus:outline-none border border-gray-300 shadow-md rounded"
                            x-cloak
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95">
                        <div class="mb-2 w-full flex space-x-2 items-center">
                            <div class="w-4/12 pt-5 text-xs">
                                <x-label for="position" value="{{ __('Position Title') }}"/>
                                <x-input x-model="new_civil_service.position" type="text" name="new_civil_service.position[]" class="text-xs" required/>
                            </div>
                            <div class="w-4/12 pt-5 text-xs">
                                <x-label for="company" value="{{ __('Company') }}"/>
                                <x-input x-model="new_civil_service.company" type="text" name="new_civil_service.company[]" class="text-xs" required/>
                            </div>
                            <div class="w-4/12 ps-2 text-xs text-center">
                                <x-label for="from text-center" value="{{ __('Inclusive Dates') }}"/>
                                <div class="flex space-x-2">
                                    <div class="">
                                        <x-label for="from" value="{{ __('From') }}"/>
                                        <x-input x-model="new_civil_service.from" type="date" name="new_civil_service.from[]" placeholder="From" class="text-xs" required/>
                                    </div>
                                    <div class="">
                                        <x-label for="to" value="{{ __('To') }}"/>
                                        <x-input x-model="new_civil_service.to" type="date" name="new_civil_service.to[]" placeholder="To" class="text-xs" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex items-center space-x-2">
                            <div class="w-3/12 text-xs">
                                <x-label for="monthly_salary" value="{{ __('Monthly Salary') }}"/>
                                <x-input x-model="new_civil_service.monthly_salary" type="text" name="new_civil_service.monthly_salary[]" class="text-xs" required/>
                            </div>
                            <div class="w-3/12 text-xs">
                                <x-label for="paygrade_step_increment" value="{{ __('Pay Grade/Step Increment') }}"/>
                                <x-input x-model="new_civil_service.paygrade_step_increment" type="text" name="new_civil_service.paygrade_step_increment[]" class="text-xs" required/>
                            </div>
                            <div class="w-3/12 text-xs">
                                <x-label for="appointment" value="{{ __('Appointment') }}"/>
                                <x-input x-model="new_civil_service.appointment" type="text" name="new_civil_service.appointment[]" class="text-xs" required/>
                            </div>
                            <div class="w-3/12 text-xs">
                                <x-label for="gov_service" value="Gov't Service"/>
                                <x-input x-model="new_civil_service.gov_service" type="text" name="new_civil_service.gov_service[]" class="text-xs" required/>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <div class="mt-3 flex space-x-3 items-center">
            <div class="w-full">
                <button @click.prevent="addNewField()" class="py-2 w-full text-base bg-primary text-white tracking-wide font-medium rounded hover:bg-[#334979] hover:text-white duration-300 focus:outline-none">New Work Experience</button>
            </div>
        </div>

        {{-- @include('admin.school.confirmation-modal.delete_appointments_funding') --}}
        <script>
            function civilServiceFields() {
                return {
                    new_civil_services: [{}],

                    addNewField() {
                        this.new_civil_services.push({
                            title: '',
                            rating: '',
                            date: '',
                            place: '',
                            license_number: '',
                            license_date_validity: ''
                        });
                    },
                    removeField(index) {
                        this.new_civil_services.splice(index, 1);
                    }
                };
            }
        </script>
    </div>
</div>
