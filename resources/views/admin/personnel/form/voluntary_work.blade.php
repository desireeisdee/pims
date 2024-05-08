<div class="mx-auto pt-3 pb-10 px-5"  x-data='voluntaryWorkFields()'>
    <h4 class="font-bold text-2xl text-gray-darkest">Voluntary Work</h4>
    <div class="mt-5">
        <div class="mt-3">
            <div class="w-full flex space-x-1 h-12 border border-gray-100 bg-gray-lightest items-center">
                <h6 class="ps-4 w-3/12 text-center">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Name & Address Of Organization</span>
                </h6>
                <h6 class="w-3/12 text-center">
                    <span class="text-xs first-line:text-center text-gray-dark font-semibold uppercase">Position/Nature Of Work</span>
                </h6>
                <h6 class="w-4/12 text-center">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Inclusive Dates</span>
                    <div class="flex item-center">
                        <div class="w-2/4">
                            <span class="text-xs text-gray-dark font-semibold uppercase">From</span>
                        </div>
                        <div class="w-2/4">
                            <span class="text-xs text-gray-dark font-semibold uppercase">To</span>
                        </div>
                    </div>
                </h6>
                <h6 class="w-1/12 text-center">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Number of Hours</span>
                </h6>
            </div>
            <div class="mt-2">
                <template x-for="(new_voluntary_work, index) in new_voluntary_works" :key="index">
                    <div class="mb-2 w-full flex items-center space-x-2 h-12 border border-gray-200 rounded focus:outline-none"
                            x-cloak
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95">
                            <div class="w-3/12 text-xs">
                                <x-input x-model="new_voluntary_work.organization_name" type="text" name=" new_voluntary_work.organization_name[]" class="text-xs" required/>
                            </div>
                            <div class="w-3/12 text-xs">
                                <x-input x-model=" new_voluntary_work.position" type="text" name=" new_voluntary_work.position[]" class="text-xs" required/>
                            </div>
                            <div class="w-4/12 text-xs">
                                <div class="flex space-x-2 justify-center">
                                    <div>
                                        <x-input x-model=" new_voluntary_work.from" type="date" name=" new_voluntary_work.from[]" class="text-xs" required/>
                                    </div>
                                    <div>
                                        <x-input x-model=" new_voluntary_work.to" type="date" name=" new_voluntary_work.to[]" class="text-xs" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/12 text-xs">
                                <x-input x-model="new_voluntary_work.number_of_hours" type="text" name=" new_voluntary_work.number_of_hours[]" class="text-xs" required/>
                            </div>
                            <div class="w-1/12 text-xs">
                                <button x-show="new_voluntary_works.length > 1" @click="removeField()" class="m-0 p-0 text-gray-400 hover:text-red-600 hover:scale-105 duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
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

        <script>
            function voluntaryWorkFields() {

                return {
                    new_voluntary_works: [{}],

                    addNewField() {
                        this.new_voluntary_works.push({
                            organization_name: '',
                            position: '',
                            from: '',
                            to: '',
                            number_of_hours: ''
                        });
                    },

                    removeField(index) {
                        this.new_voluntary_works.splice(index, 1);
                    }
                };
            }
        </script>
    </div>
</div>
