<div class="mx-auto pt-3 pb-10 px-5">
    <h4 class="font-bold text-2xl text-gray-darkest">Training & Certification</h4>
    <div class="mt-5" x-data='voluntaryWorkFields()'>
        <div class="mt-3">
            <div>
                <template x-for="( new_training, index) in  new_trainings" :key="index">
                    <div class="mb-4 px-4 py-4 focus:outline-none border border-gray-300 shadow-md rounded"
                            x-cloak
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95">
                        <div class="mb-2 w-full flex space-x-2 items-center">
                            <div class="w-9/12 text-xs">
                                <x-label for="new_training.title" value="{{ __('Training/Seminar Title') }}"/>
                                <x-input x-model="new_training.title" type="text" name="new_training.title[]" class="text-xs" required/>
                            </div>
                            <div class="w-3/12 text-xs">
                                <x-label for="new_training.type" value="{{ __('Type of LD') }}"/>
                                <x-input x-model="new_training.type" type="text" name=" new_training.type[]" class="text-xs" required/>
                            </div>
                        </div>
                        <div class="mb-2 w-full flex space-x-2 items-center">
                            <div class="pt-5 w-6/12 text-xs">
                                <x-label for="to" value="{{ __('Conducted/Sponsored By') }}"/>
                                <x-input x-model="new_training.sponsor" type="text" name=" new_training.sponsor[]" class="text-xs" required/>
                            </div>
                            <div class="w-4/12 ps-2 text-xs text-center">
                                <x-label for="from text-center" value="{{ __('Inclusive Dates') }}"/>
                                <div class="flex space-x-2">
                                    <div class="">
                                        <x-label for="from" value="{{ __('From') }}"/>
                                        <x-input x-model="new_training.from" type="date" name="new_training.from[]" placeholder="From" class="text-xs" required/>
                                    </div>
                                    <div class="">
                                        <x-label for="to" value="{{ __('To') }}"/>
                                        <x-input x-model="new_training.to" type="date" name="new_training.to[]" placeholder="To" class="text-xs" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-5 w-2/12 text-xs">
                                <x-label for="to" value="{{ __('Number of Hours') }}"/>
                                <x-input x-model="new_training.number_of_hours" type="number" name=" new_training.number_of_hours[]" class="text-xs" required/>
                            </div>
                        </div>



                        <div class="w-1/12 text-xs">
                            <button x-show="new_trainings.length > 1" @click="removeField()" class="m-0 p-0 text-gray-400 hover:text-red-600 hover:scale-105 duration-300">
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
                <button @click.prevent="addNewField()" class="py-2 w-full text-base bg-primary text-white tracking-wide font-medium rounded hover:bg-[#334979] hover:text-white duration-300 focus:outline-none">New Civil Service Eligibility</button>
            </div>
        </div>

        {{-- @include('admin.school.confirmation-modal.delete_appointments_funding') --}}
        <script>
            function voluntaryWorkFields() {
                return {
                    new_trainings: [{}],

                    addNewField() {
                        this.new_trainings.push({
                            title: '',
                            type: '',
                            from: '',
                            to: '',
                            number_of_hours: '',
                            sponsors: ''
                        });
                    },
                    removeField(index) {
                        this.new_trainings.splice(index, 1);
                    }
                };
            }
        </script>
    </div>
</div>
