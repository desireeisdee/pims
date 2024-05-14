<div class="mx-auto pt-3 pb-10 px-5">
    <h4 class="font-bold text-2xl text-gray-darkest">Family</h4>
    <section>
        <h4 class="my-3 font-bold text-base text-gray-darkest"></h4>
        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
            <span class="w-1/4">
                <x-label for="first_name" value="Father's First Name"/>
                <x-input id="first_name" type="text" name="first_name" required/>
            </span>
            <span class="w-1/4">
                <x-label for="middle_name" value="Father's Middle Name"/>
                <x-input id="middle_name" type="text" name="middle_name" required/>
            </span>
            <span class="w-1/4">
                <x-label for="last_name" value="Father's Last Name" />
                <x-input id="last_name" type="text" name="last_name" required/>
            </span>
            <span class="w-1/4">
                <x-label for="name_ext" value="Father's Name Extension (JR., SR)" />
                <x-input id="name_ext" type="text" name="name_ext" required/>
            </span>
        </div>
        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
            <span class="w-1/4">
                <x-label for="first_name" value="Mother's First Name"/>
                <x-input id="first_name" type="text" name="first_name" required/>
            </span>
            <span class="w-1/4">
                <x-label for="middle_name" value="Mother's Middle Name"/>
                <x-input id="middle_name" type="text" name="middle_name" required/>
            </span>
            <span class="w-1/4">
                <x-label for="last_name" value="Mother's Maiden Name" />
                <x-input id="last_name" type="text" name="last_name" required/>
            </span>
            <span class="w-1/4">
            </span>
        </div>
    </section>


    <hr>
    <h5 class="mt-5 mb-3 font-bold text-xl text-gray-darkest">Spouse</h5>
    <section>
        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
            <span class="w-1/4">
                <x-label for="first_name" value="{{ __('First Name') }}"/>
                <x-input id="first_name" type="number" name="first_name" required/>
            </span>
            <span class="w-1/4">
                <x-label for="middle_name" value="{{ __('Middle Name') }}"/>
                <x-input id="middle_name" type="text" name="middle_name" required/>
            </span>
            <span class="w-1/4">
                <x-label for="last_name" value="{{ __('Last Name') }}" />
                <x-input id="last_name" type="text" name="last_name" required/>
            </span>
            <span class="w-1/4">
                <x-label for="name_ext" value="{{ __('Name Extension (JR., SR)') }}" />
                <x-input id="name_ext" type="text" name="name_ext" required/>
            </span>
        </div>
        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
            <span class="w-1/2">
                <x-label for="occupation" value="{{ __('Occupation') }}"/>
                <x-input id="occupation" type="text" name="occupation" required/>
            </span>
            <span class="w-1/2">
                <x-label for="business_name" value="{{ __('Employer/Business Name') }}"/>
                <x-input id="business_name" type="text" name="business_name" required/>
            </span>
        </div>
        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
            <span class="w-1/2">
                <x-label for="business_address" value="{{ __('Business Address') }}"/>
                <x-input id="business_address" type="text" name="business_address" required/>
            </span>
            <span class="w-1/2">
                <x-label for="telephone" value="{{ __('Telephone No.') }}"/>
                <x-input id="telephone" type="text" name="telephone" required/>
            </span>
        </div>
    </section>

    <hr>
    <h5 class="mt-5 mb-3 font-bold text-xl text-gray-darkest">Children</h5>
    <div class="mt-5" x-data='childrenFields()'>
        <div class="mt-3">
            <div class="ps-5 w-full flex space-x-3 h-10 border border-gray-100 bg-gray-lightest items-center">
                <h6 class="w-9/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Full Name</span>
                </h6>
                <h6 class="w-2/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Date of Birth</span>
                </h6>
            </div>
            <div class="mt-2">
                <template x-for="(new_children, index) in new_childrens" :key="index">
                    <div class="mb-2 w-full flex items-center space-x-2 h-12 border border-gray-200 rounded focus:outline-none"
                            x-cloak
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95">
                        <div class="w-9/12 ps-3 text-xs">
                            <div class="sm:flex rounded-md border border-gray-300">
                                <input id="first_name" type="number" name="first_name" placeholder="First Name" class="w-[20rem] rounded-s-md border-none appearance-none placeholder-gray-400 ring-0" required/>
                                <input id="middle_name" type="text" name="middle_name" placeholder="M.I." class="w-[4rem] rounded-none border-none appearance-none placeholder-gray-400 ring-0" required/>
                                <input id="last_name" type="text" name="last_name" placeholder="Last Name" class="w-[20rem] rounded-none border-none appearance-none placeholder-gray-400 ring-0" required/>
                                <input id="name_ext" type="text" name="name_ext" placeholder="Ext." class="w-[4rem] rounded-e-md border-none appearance-none placeholder-gray-400 ring-0" required/>
                            </div>
                        </div>
                        <div class="w-2/12 ps-3 text-xs">
                            <x-input x-model="new_children.date_of_birth" type="date" name="new_children.date_of_birth[]" class="text-xs" placeholder="0" required/>
                        </div>
                        <div class="w-1/12 ps-3 text-xs">
                            <button x-show="new_childrens.length > 1" @click="removeField()" class="m-0 p-0 text-gray-400 hover:text-red-600 hover:scale-105 duration-300">
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
                <button @click.prevent="addNewField()" class="py-2 w-full text-base bg-primary text-white tracking-wide font-medium rounded hover:bg-[#334979] hover:text-white duration-300 focus:outline-none">New Child</button>
            </div>
        </div>

        {{-- @include('admin.school.confirmation-modal.delete_appointments_funding') --}}
        <script>
            function childrenFields() {
                return {
                    new_childrens: [{}],

                    addNewField() {
                        this.new_childrens.push({
                            first_name: '',
                            middle_name: '',
                            last_name: '',
                            name_ext: '',
                            date_of_birth: ''
                        });
                    },
                    removeField(index) {
                        this.new_childrens.splice(index, 1);
                    }
                };
            }
        </script>
    </div>
</div>
