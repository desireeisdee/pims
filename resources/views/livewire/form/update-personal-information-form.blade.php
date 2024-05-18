<section>
    <div class="flex justify-between">
        <h4 class="font-bold text-2xl text-gray-darkest">{{ $personnel ? 'Edit' : 'New' }} Personal Information</h4>
        <div class="w-[16.666667%]">
            <x-button wire:click.prevent="back" label="Back" class="px-5 py-2.5 w-full bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
        </div>
    </div>
    <div>
        <div class="my-5">
            <h5 class="font-bold text-xl text-gray-darkest">Personal Information </h5>
            <div class="mt-2 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/4">
                    <x-input type="text" class="form-control" id="first_name" label="First Name" wire:model="first_name" />
                </span>
                <span class="w-1/4">
                    <x-input type="text" class="form-control" id="middle_name" label="Middle Name" wire:model="middle_name" />
                </span>
                <span class="w-1/4">
                    <x-input type="text" class="form-control" id="last_name" label="Last Name" wire:model="last_name" />
                </span>
                <span class="w-1/4">
                    <x-input type="text" class="form-control" id="name_ext" label="Name Extension (JR., SR)" wire:model="name_ext" />
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-3/12">
                    <x-input type="date" class="form-control" id="date_of_birth" label="Date of Birth" wire:model="date_of_birth" />
                </span>
                <span class="w-3/12">
                    <x-input type="text" class="form-control" id="place_of_birth" label="Place of Birth" wire:model="place_of_birth" />
                </span>
                <span class="w-3/12">
                    <x-native-select wire:model="civil_status" class="form-control" label="Civil Status">
                        <option value="single" >Single</option>
                        <option value="married">Married</option>
                        <option value="widowed">Widowed</option>
                        <option value="divorced">Divorced</option>
                        <option value="others">Others</option>
                    </x-native-select>
                </span>
                <span class="w-3/12">
                    <label for="sex" class="pb-1 block font-medium text-sm text-gray-700">Sex</label>
                    <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                        <div>
                            <input id="male"  wire:model="sex" type="radio" name="sex" value="male" class="peer hidden"/>
                            <label for="male" class="block cursor-pointer select-none rounded-xl px-2 py-1 text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Male</label>
                        </div>

                        <div>
                            <input id="female" wire:model="sex" type="radio" name="sex" value="female" class="peer hidden"/>
                            <label for="female" class="block cursor-pointer select-none rounded-xl px-2 py-1 text-center peer-checked:bg-pink-500 peer-checked:font-bold peer-checked:text-white">Female</label>
                        </div>
                    </div>
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3">
                <span class="w-3/12">
                    <x-input type="text" class="form-control" id="citizenship" label="Citizenship" wire:model="citizenship" />
                </span>
                <span class="w-3/12">
                    <x-input type="text" class="form-control" id="blood_type" label="Blood Type" wire:model="blood_type" />
                </span>
                <span class="w-3/12">
                    <x-input type="number" class="form-control" id="height" label="Height" suffix="m" wire:model="height" />
                </span>
                <span class="w-3/12">
                    <x-input type="number" class="form-control" id="weight" label="Weight" suffix="kg" wire:model="weight" />
                </span>
            </div>
        </div>
        <div class="my-7">
            <h5 class="font-bold text-xl text-gray-darkest">Government Information</h5>
            <div class="mt-2 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/3">
                    <x-input type="number" class="form-control" id="tin" label="TIN" wire:model="tin" />
                </span>
                <span class="w-1/3">
                    <x-input type="number" class="form-control" id="sss_num" label="TIN" wire:model="sss_num" />
                </span>
                <span class="w-1/3">
                    <x-input type="number" class="form-control" id="gsis_num" label="GSIS BP No." wire:model="gsis_num" />
                </span>
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-1/3">
                    <x-input type="number" class="form-control" id="philhealth_num" label="PHILHEALTH NO." wire:model="philhealth_num" />
                </span>
                <span class="w-1/3">
                    <x-input type="number" class="form-control" id="pagibig_num" label="PAG-IBIG No" wire:model="pagibig_num" />
                </span>
            </div>
        </div>
        <div class="my-7">
            <h5 class="font-bold text-xl text-gray-darkest">Work Information</h5>
            <div class="mt-2 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-3/12">
                    <x-input type="number" class="form-control" id="personnel_id" label="Personnel ID" wire:model="personnel_id" />
                </span>
                <span class="w-9/12">
                    {{-- @livewire('form.input.school-search-select-tag') --}}
                    <x-input type="number" class="form-control" id="school_id" label="School ID" wire:model="school_id" />
                    {{-- <x-native-select wire:model="school_id" class="form-control" label="School ID">
                        <option value="others">Others</option>
                    </x-native-select> --}}
                </span>
            </div>
            <div class="mt-2 mb-4 p-0 flex space-x-3 justify-between">
                {{-- <span class="w-3/12">
                    <x-input type="number" class="form-control" id="school_id" label="School ID" wire:model="school_id" />
                    <x-native-select wire:model="school_id" class="form-control" label="School ID">
                        <option value="others">Others</option>
                    </x-native-select>
                </span> --}}
                <span class="w-3/12">
                    <x-native-select wire:model="appointment" class="form-control" label="Nature of Appointment">
                        <option value="regular">Regular</option>
                        <option value="part-time">Part-Time</option>
                        <option value="temporary">Temporary</option>
                        <option value="contract">Contract</option>
                    </x-native-select>
                </span>
                <span class="w-3/12">
                    <x-native-select wire:model="fund_source" class="form-control" label="Fund Source">
                        <option value="single" >Single</option>
                        <option value="married">Married</option>
                        <option value="widowed">Widowed</option>
                        <option value="divorced">Divorced</option>
                        <option value="others">Others</option>
                    </x-native-select>
                </span>
                <span class="w-3/12">
                    <x-input type="text" class="form-control" id="job_title" label="Job Title" wire:model="job_title" />
                </span>
                <span class="w-2/12">
                    {{-- <x-input type="text" class="form-control" id="rank" label="Teacher Rank" wire:model="rank" /> --}}
                </span>
            </div>
            <div class="mt-2 mb-4 p-0 flex space-x-3" x-data="{ jobStatus: @entangle('job_status') }">
                <span class="w-2/12">
                    <x-native-select wire:model="job_status" class="form-control" label="Job Status" x-model="jobStatus">
                        <option value="active">Active</option>
                        <option value="vacation">Vacation</option>
                        <option value="terminated">Terminated</option>
                        <option value="on leave">On Leave</option>
                        <option value="suspended">Suspended</option>
                        <option value="resigned">Resigned</option>
                        <option value="probation">Probation</option>
                        <option value="contract">Contract</option>
                        <option value="part-time">Part-Time</option>
                    </x-native-select>
                </span>
                <span class="w-2/12">
                    <x-input type="date" class="form-control" id="employment_start" label="Employment Start Date" wire:model="employment_start" />
                </span>
                <span class="w-2/12">
                    <x-input type="date" class="form-control" id="employment_end" label="Employment End Date" wire:model="employment_end" x-bind:disabled="!(jobStatus === 'resigned' || jobStatus === 'terminated')" />
                </span>
            </div>
        </div>
        <div class="my-7">
            <h5 class="font-bold text-xl text-gray-darkest">Contact Information</h5>
            <div class="mt-2 mb-4 p-0 flex space-x-3 justify-between">
                <span class="w-6/12">
                    <x-input type="email" class="form-control" id="email" label="Email" wire:model="email" />
                </span>
                <span class="w-3/12">
                    <x-input type="number" class="form-control" id="tel_no" label="Telephone No." wire:model="tel_no" />
                </span>
                <span class="w-3/12">
                    <x-input type="number" class="form-control" id="mobile_no" label="Mobile No." wire:model="mobile_no" />
                </span>
            </div>
        </div>
    </div>
    <div class="my-5 p-0 flex space-x-3 justify-end">
        <div class="w-2/12">
            <x-button wire:click.prevent="cancel" label="Cancel" class="px-5 py-2.5 w-full bg-danger font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-red-600 hover:scale-105 duration-150"/>
        </div>
        <div class="w-2/12">
            @isset($personnel)
                <x-button wire:click.prevent="update" label="Save" class="px-5 py-2.5 w-full bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
            @else
                <x-button wire:click.prevent="store" label="Save" class="px-5 py-2.5 w-full bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
            @endisset
        </div>
    </div>
</section>
