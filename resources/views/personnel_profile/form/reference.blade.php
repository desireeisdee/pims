<div class="mx-auto pt-3 pb-10 px-5">
    <h4 class="font-bold text-2xl text-gray-darkest">References</h4>
    <div class="mt-5" x-data='referenceFields()'>
        <div class="mt-3">
            <div class="w-full flex space-x-2 h-10 border border-gray-100 bg-gray-lightest items-center">
                <h6 class="ps-5 w-4/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Full Name</span>
                </h6>
                <h6 class="w-4/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Address</span>
                </h6>
                <h6 class="w-3/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Telephone No.</span>
                </h6>
            </div>
            <div class="mt-2">
                <template x-for="(new_reference, index) in new_references" :key="index">
                    <div class="mb-2 w-full flex items-center space-x-2 h-12 border border-gray-200 rounded focus:outline-none"
                            x-cloak
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95">
                        <div class="w-4/12 ps-3 text-xs">
                            <x-input x-model="new_reference.full_name" type="text" name="new_reference.full_name[]" class="text-xs" required/>
                        </div>
                        <div class="w-4/12 ps-3 text-xs">
                            <x-input x-model="new_reference.address" type="text" name="new_reference.address[]" class="text-xs" required/>
                        </div>
                        <div class="w-3/12 ps-3 text-xs">
                            <x-input x-model="new_reference.tel_no" type="text" name="new_reference.tel_no[]" class="text-xs" required/>
                        </div>
                        <div class="w-1/12 ps-3 text-xs">
                            <button x-show="new_references.length > 1" @click="removeField()" class="m-0 p-0 text-gray-400 hover:text-red-600 hover:scale-105 duration-300">
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
            function referenceFields() {
                return {
                    new_references: [{}],

                    addNewField() {
                        this.new_references.push({
                            full_name: '',
                            address: '',
                            tel_no: ''
                        });
                    },

                    removeField(index) {
                        this.new_references.splice(index, 1);
                    }
                };
            }
        </script>
    </div>
</div>
