<div class="mx-auto pt-3 pb-10 px-5">
    <h4 class="font-bold text-2xl text-gray-darkest">Personal Information</h4>
    <div class="mt-5">
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
                <x-label for="gender" value="{{ __('Gender') }}"/>
                <x-input id="gender" type="text" name="gender" required/>
            </span>
            <span class="w-1/2">
                <x-label for="civil_status" value="{{ __('Civil Status') }}"/>
                <x-input id="civil_status" type="text" name="civil_status" required/>
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
        <h5 class="font-bold text-xl text-gray-darkest">Government Information</h5>
        <div class="mt-2 mb-4 p-0 flex space-x-3 justify-between">
            <span class="w-1/2">
                <x-label for="tin" value="{{ __('TIN') }}"/>
                <x-input id="tin" type="number" name="tin" required/>
            </span>
            <span class="w-1/2">
                <x-label for="sss_number" value="{{ __('SSS No.') }}"/>
                <x-input id="sss_number" type="number" name="sss_number" required/>
            </span>
        </div>
        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
            <span class="w-1/2">
                <x-label for="gsis_number" value="{{ __('GSIS BP No.') }}"/>
                <x-input id="gsis_number" type="number" name="gsis_number" required/>
            </span>
            <span class="w-1/2">
                <x-label for="philhealth_number" value="{{ __('PHILHEALTH NO.') }}"/>
                <x-input id="philhealth_number" type="number" name="philhealth_number" required/>
            </span>
        </div>
        <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
            <span class="w-1/2">
                <x-label for="pagibig_number" value="{{ __('PAG-IBIG No.') }}"/>
                <x-input id="pagibig_number" type="number" name="pagibig_number" required/>
            </span>
            <span class="w-1/2">
                <x-label for="personnel_id" value="{{ __('Agency Employee No.') }}"/>
                <x-input id="personnel_id" type="number" name="personnel_id" required/>
            </span>
        </div>
    </div>
</div>
