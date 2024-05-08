<div class="mx-auto pt-3 pb-10 px-5">
    <h4 class="font-bold text-2xl text-gray-darkest">References</h4>
    <div class="mt-5" x-data='assignmentDetailFields()'>
        <div class="mt-3">
            <div class="w-full flex space-x-2 h-16 border border-gray-100 bg-gray-lightest items-center">
                <h6 class="ps-5 w-4/12 text-center">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Subject Taught, Advisory Class & Other Ancillary Assignment</span>
                </h6>
                <h6 class="w-7/12 items-center text-center">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Daily Program (time duration)</span>
                    <div class="px-3 flex items-center">
                        <div class="w-3/12">
                            <span class="text-xs text-gray-dark font-semibold uppercase">DAY</span>
                        </div>
                        <div class="w-3/12">
                            <span class="text-xs text-gray-dark font-semibold uppercase">From</span>
                        </div>
                        <div class="w-3/12">
                            <span class="text-xs text-gray-dark font-semibold uppercase">To</span>
                        </div>
                        <div class="w-3/12">
                            <span class="text-xs text-gray-dark font-semibold uppercase">Teaching Minutes</span>
                            <span class="text-xs text-gray-dark font-semibold uppercase">(Week)</span>
                        </div>
                    </div>
                </h6>
            </div>
            <div class="mt-2">
                <template x-for="(new_assignment_detail, index) in new_assignment_details" :key="index">
                    <div class="mb-2 w-full flex items-center space-x-2 h-12 border border-gray-200 rounded focus:outline-none"
                            x-cloak
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95">
                        <div class="w-4/12 ps-3 text-xs">
                            <x-input x-model="new_reference.assignment" type="text" name="new_reference.assignment[]" class="text-xs" required/>
                        </div>
                        <div class="w-7/12 ps-3 text-xs">
                            <div class="flex space-x-3">
                                <div class="w-3/12">
                                    <x-input x-model="new_reference.day" type="text" name="new_reference.day[]" class="text-xs" required/>
                                </div>
                                <div class="w-3/12">
                                    <x-input x-model="new_reference.from" type="time" name="new_reference.from[]" class="text-xs" required/>
                                </div>
                                <div class="w-3/12">
                                    <x-input x-model="new_reference.to" type="time" name="new_reference.to[]" class="text-xs" required/>
                                </div>
                                <div class="w-3/12">
                                    <x-input x-model="new_reference.weekly_minutes" type="number" name="new_reference.weekly_minutes[]" class="text-xs" required/>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/12 ps-3 text-xs">
                            <button x-show="new_assignment_details.length > 1" @click="removeField()" class="m-0 p-0 text-gray-400 hover:text-red-600 hover:scale-105 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <div class="mt-3 flex space-x-3 items-center">
            <div class="w-full">
                <button @click.prevent="addNewField()" class="py-2 w-full text-base bg-primary text-white tracking-wide font-medium rounded hover:bg-[#334979] hover:text-white duration-300 focus:outline-none">New Assignment Details</button>
            </div>
        </div>

        {{-- @include('admin.school.confirmation-modal.delete_appointments_funding') --}}
        <script>
            function assignmentDetailFields() {
                return {
                    new_assignment_details: [{}],

                    addNewField() {
                        this.new_assignment_details.push({
                            assignment: '',
                            day: '',
                            from: '',
                            to: '',
                            weekly_minutes: ''
                        });
                    },

                    removeField(index) {
                        this.new_assignment_details.splice(index, 1);
                    }
                };
            }
        </script>
    </div>
</div>
