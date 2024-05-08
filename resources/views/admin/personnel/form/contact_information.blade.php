<div class="mx-auto pt-3 pb-10 px-5">
    <h4 class="font-bold text-2xl text-gray-darkest">Contact Information</h4>
    <div class="mt-5">
        <section>
            <div class="m-0 mb-4 p-0">
                <x-label for="email" value="{{ __('Email') }}"/>
                <x-input id="email" type="email" name="email" required/>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="telephone" value="{{ __('Telephone No.') }}"/>
                    <x-input id="telephone" type="text" name="telephone" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="phone" value="{{ __('Mobile No.') }}"/>
                    <x-input id="phone" type="text" name="phone" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="citizenship" value="{{ __('Citizenship') }}"/>
                    <x-input id="citizenship" type="text" name="citizenship" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="blood_type" value="{{ __('Blood Type') }}"/>
                    <x-input id="blood_type" type="text" name="blood_type" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="height" value="{{ __('Height (m)') }}"/>
                    <x-input id="height" type="text" name="height" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="weight" value="{{ __('Weight (kg)') }}"/>
                    <x-input id="weight" type="text" name="weight" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="date_of_birth" value="{{ __('Date of Birth') }}"/>
                    <x-input id="date_of_birth" type="text" name="date_of_birth" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="place_of_birth" value="{{ __('Place of Birth') }}"/>
                    <x-input id="place_of_birth" type="text" name="place_of_birth" required/>
                </span>
            </div>
        </section>

        <hr>
        <h5 class="mt-5 mb-3 font-bold text-xl text-gray-darkest">Permanent Address</h5>
        <section>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="permanent_house_no" value="{{ __('House/Block/Lot No.') }}"/>
                    <x-input id="permanent_house_no" type="text" name="permanent_house_no" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="permanent_st_address" value="{{ __('Street Address') }}"/>
                    <x-input id="permanent_st_address" type="text" name="permanent_st_address" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="permanent_subdivision" value="{{ __('Subdivision/Village') }}"/>
                    <x-input id="permanent_subdivision" type="text" name="permanent_subdivision" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="permanent_brgy" value="{{ __('Barangay') }}"/>
                    <x-input id="permanent_brgy" type="text" name="permanent_brgy" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="permanent_city" value="{{ __('City/Municipality') }}"/>
                    <x-input id="permanent_city" type="text" name="permanent_city" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="permanent_province" value="{{ __('Province') }}"/>
                    <x-input id="permanent_province" type="text" name="permanent_province" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="permanent_region" value="{{ __('Region') }}"/>
                    <x-input id="permanent_region" type="text" name="permanent_region" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="permanent_zip_code" value="{{ __('Zip Code') }}"/>
                    <x-input id="permanent_zip_code" type="text" name="permanent_zip_code" required/>
                </span>
            </div>
        </section>

        <hr>
        <h5 class="mt-5 mb-3 font-bold text-xl text-gray-darkest">Residential Address</h5>
        <section>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="residential_house_no" value="{{ __('House/Block/Lot No.') }}"/>
                    <x-input id="residential_house_no" type="text" name="residential_house_no" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="residential_st_address" value="{{ __('Street Address') }}"/>
                    <x-input id="residential_st_address" type="text" name="residential_st_address" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="residential_subdivision" value="{{ __('Subdivision/Village') }}"/>
                    <x-input id="residential_subdivision" type="text" name="residential_subdivision" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="residential_brgy" value="{{ __('Barangay') }}"/>
                    <x-input id="residential_brgy" type="text" name="residential_brgy" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="residential_city" value="{{ __('City/Municipality') }}"/>
                    <x-input id="residential_city" type="text" name="residential_city" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="residential_province" value="{{ __('Province') }}"/>
                    <x-input id="residential_province" type="text" name="residential_province" required/>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="residential_region" value="{{ __('Region') }}"/>
                    <x-input id="residential_region" type="text" name="residential_region" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="residential_zip_code" value="{{ __('Zip Code') }}"/>
                    <x-input id="residential_zip_code" type="text" name="residential_zip_code" required/>
                </span>
            </div>
        </section>

        <hr>
        <h5 class="mt-5 mb-3 font-bold text-xl text-gray-darkest">Contact Person In Case Of Emergency</h5>
        <section>
            <div class="m-0 mb-4 p-0">
                <x-label for="name" value="{{ __('Name') }}"/>
                <x-input id="name" type="text" name="name" required/>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/2">
                    <x-label for="email" value="{{ __('Email') }}"/>
                    <x-input id="email" type="email" name="email" required/>
                </span>
                <span class="w-1/2">
                    <x-label for="phone" value="{{ __('Phone Number') }}"/>
                    <x-input id="phone" type="text" name="phone" required/>
                </span>
            </div>
        </section>

        <hr>
        <h5 class="mt-5 mb-3 font-bold text-xl text-gray-darkest">Work Address</h5>
        <div class="m-0 mb-4 p-0">
            <x-label for="work_address" value="{{ __('Work Address') }}"/>
            <x-input id="work_address" type="text" name="work_address" required/>
        </div>


    </div>
</div>
