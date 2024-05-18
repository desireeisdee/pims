<div class="mx-auto py-8 px-10" >
    @if (!$updateMode)
        <section>
            <div class="flex justify-between">
                <h4 class="font-bold text-2xl text-gray-darkest">Personal Information</h4>
                <div>
                    <x-button wire:click.prevent="edit" label="Edit" class="px-5 bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
            </div>
            </div>
            <div>
                <div>
                    {{-- <h5 class="font-bold text-xl text-gray-darkest">Personal Information</h5> --}}
                    <div class="mt-5 mb-4 p-0 flex space-x-3 justify-between">
                        <span class="w-1/4">
                            <x-input type="text" class="bg-gray-50 border-gray-300" id="first_name" label="First Name" wire:model="first_name" readonly/>
                        </span>
                        <span class="w-1/4">
                            <x-input type="text" class="bg-gray-50 border-gray-300" id="middle_name" label="Middle Name" wire:model="middle_name" readonly/>
                        </span>
                        <span class="w-1/4">
                            <x-input type="text" class="bg-gray-50 border-gray-300" id="last_name" label="Last Name" wire:model="last_name" readonly/>
                        </span>
                        <span class="w-1/4">
                            <x-input type="text" class="bg-gray-50 border-gray-300" id="name_ext" label="Name Extension (JR., SR)" wire:model="name_ext" readonly/>
                        </span>
                    </div>
                    <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                        <span class="w-3/12">
                            <x-input type="date" class="bg-gray-50 border-gray-300" id="date_of_birth" label="Date of Birth" wire:model="date_of_birth" readonly/>
                        </span>
                        <span class="w-3/12">
                            <x-input type="text" class="bg-gray-50 border-gray-300" id="place_of_birth" label="Place of Birth" wire:model="place_of_birth" readonly/>
                        </span>
                        <span class="w-3/12">
                            <x-input type="text" class="bg-gray-50 border-gray-300 capitalize" id="civil_status" label="Civil Status" wire:model="civil_status" readonly/>
                        </span>
                        <span class="w-3/12">
                            <x-input type="text" class="bg-gray-50 border-gray-300" id="sex" label="Sex" wire:model="sex" readonly/>
                        </span>
                    </div>
                    <div class="m-0 mb-4 p-0 flex space-x-3">
                        <span class="w-3/12">
                            <x-input type="text" class="bg-gray-50 border-gray-300" id="citizenship" label="Citizenship" wire:model="citizenship" readonly/>
                        </span>
                        <span class="w-3/12">
                            <x-input type="text" class="bg-gray-50 border-gray-300" id="blood_type" label="Blood Type" wire:model="blood_type" readonly/>
                        </span>
                        <span class="w-3/12">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="height" label="Height" suffix="m" wire:model="height" readonly/>
                        </span>
                        <span class="w-3/12">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="weight" label="Weight" suffix="kg" wire:model="weight" readonly/>
                        </span>
                    </div>
                </div>
                <div class="mt-10">
                    <h5 class="font-bold text-xl text-gray-darkest">Government Information</h5>
                    <div class="mt-5 mb-4 p-0 flex space-x-3 justify-between">
                        <span class="w-1/3">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="tin" label="TIN" wire:model="tin" readonly/>
                        </span>
                        <span class="w-1/3">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="sss_num" label="SSS No." wire:model="sss_num" readonly/>
                        </span>
                        <span class="w-1/3">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="gsis_num" label="GSIS BP No." wire:model="gsis_num" readonly/>
                        </span>
                    </div>
                    <div class="m-0 mb-4 p-0 flex space-x-3 justify-between">
                        <span class="w-1/3">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="philhealth_num" label="PHILHEALTH NO." wire:model="philhealth_num" readonly/>
                        </span>
                        <span class="w-1/3">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="pagibig_num" label="PAG-IBIG No" wire:model="pagibig_num" readonly/>
                        </span>
                        <span class="w-1/3">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="personnel_id" label="Personnel ID" wire:model="personnel_id" readonly/>
                        </span>
                    </div>
                </div>
                <div class="mt-10">
                    <h5 class="font-bold text-xl text-gray-darkest">Contact Information</h5>
                    <div class="mt-5 mb-4 p-0 flex space-x-3 justify-between">
                        <span class="w-6/12">
                            <x-input type="email" class="bg-gray-50 border-gray-300" id="email" label="Email" wire:model="email" readonly/>
                        </span>
                        <span class="w-3/12">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="tel_no" label="Telephone No." wire:model="tel_no" readonly/>
                            <span id="tel-error" style="color: red; display: none;">Please enter a valid telephone number.</span>
                        </span>
                        <span class="w-3/12">
                            <x-input type="number" class="bg-gray-50 border-gray-300" id="mobile_no" label="Mobile No." wire:model="mobile_no" readonly/>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    @else
        @livewire('form.update-personal-information')
    @endif
    <script>
        console.log(document.getElementById('tel_no'));
        document.addEventListener('DOMContentLoaded', (event) => {
            const telInput = document.getElementById('tel_no');
            const errorSpan = document.getElementById('tel-error');

            telInput.addEventListener('input', () => {
                validatePhoneNumber();
            });

            function validatePhoneNumber() {
                const telValue = telInput.value;
                const telPattern = /^[0-9.\-]+$/;

                if (!telPattern.test(telValue)) {
                    errorSpan.style.display = 'inline';
                    telInput.classList.add('invalid');
                } else {
                    errorSpan.style.display = 'none';
                    telInput.classList.remove('invalid');
                }
            }
        });
    </script>

</div>
