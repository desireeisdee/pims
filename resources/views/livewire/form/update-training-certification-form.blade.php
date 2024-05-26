<div>
    <h4 class="font-bold text-2xl text-gray-darkest">Edit Training & Certifications</h4>
    <div class="mt-5">
        <div class="mt-3">
            <div class="w-full flex space-x-2 h-10 border border-gray-100 bg-gray-lightest items-center">
                <h6 class="w-2/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">ATTENDANCE START DATE</span>
                </h6>
                <h6 class="w-2/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">ATTENDANCE END DATE</span>
                </h6>
                <h6 class="ps-5 w-3/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS</span>
                </h6>
                <h6 class="w-3/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">CONDUCTED/ SPONSORED BY</span>
                </h6>

                <h6 class="w-1/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Type</span>
                </h6>
                <h6 class="w-1/12">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Hours</span>
                </h6>
            </div>
            <div class="mt-2">
                <!-- Old Data Children -->
                @foreach ($old_training_certifications as $index => $old_training_certification)
                    <div class="mb-2 px-3 w-full flex items-center space-x-3 h-12 border border-gray-200 rounded focus:outline-none">
                        <div class="w-2/12 ps-3 text-xs">
                            <x-input type="date" wire:model="old_training_certifications.{{ $index }}.inclusive_from" name="old_children[{{ $index }}][inclusive_from]" class="text-xs" required/>
                        </div>
                        <div class="w-2/12 ps-3 text-xs">
                            <x-input type="date" wire:model="old_training_certifications.{{ $index }}.inclusive_to" name="old_children[{{ $index }}][inclusive_to]" class="text-xs" required/>
                        </div>
                        <div class="w-3/12 ps-3 text-xs">
                            <x-input type="text" wire:model="old_training_certifications.{{ $index }}.training_seminar_title" name="old_children[{{ $index }}][training_seminar_title]" class="text-xs" required/>
                        </div>
                        <div class="w-3/12 ps-3 text-xs">
                            <x-input type="text" wire:model="old_training_certifications.{{ $index }}.sponsored" name="old_children[{{ $index }}][sponsored]" class="text-xs" required/>
                        </div>
                        <div class="w-1/12 ps-3 text-xs">
                            <x-input type="text" wire:model="old_training_certifications.{{ $index }}.type" name="old_children[{{ $index }}][type]" class="text-xs" required/>
                        </div>
                        <div class="w-1/12 ps-3 text-xs">
                            <x-input type="number" wire:model="old_training_certifications.{{ $index }}.hours" name="old_children[{{ $index }}][hours]" class="text-xs" required/>
                        </div>
                    </div>
                @endforeach

                <!-- New Data Children -->
                @foreach ($new_training_certifications as $index => $new_training_certification)
                    <div class="mb-2 px-3 w-full flex items-center space-x-3 h-12 border border-gray-200 rounded focus:outline-none"
                        x-cloak
                        x-transition:enter="transition ease-in-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in-out duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95">
                        <div class="w-2/12 ps-3 text-xs">
                            <x-input type="date" wire:model="new_training_certifications.{{ $index }}.inclusive_from" name="new_training_certifications[{{ $index }}][inclusive_from]" class="text-xs" required/>
                        </div>
                        <div class="w-2/12 ps-3 text-xs">
                            <x-input type="date" wire:model="new_training_certifications.{{ $index }}.inclusive_to" name="new_training_certifications[{{ $index }}][inclusive_to]" class="text-xs" required/>
                        </div>
                        <div class="w-3/12 ps-3 text-xs">
                            <x-input type="text" wire:model="new_training_certifications.{{ $index }}.training_seminar_title" name="new_training_certifications[{{ $index }}][training_seminar_title]" class="text-xs" required/>
                        </div>
                        <div class="w-3/12 ps-3 text-xs">
                            <x-input type="text" wire:model="new_training_certifications.{{ $index }}.sponsored" name="new_training_certifications[{{ $index }}][sponsored]" class="text-xs" required/>
                        </div>
                        <div class="w-1/12 ps-3 text-xs">
                            <x-input type="text" wire:model="new_training_certifications.{{ $index }}.type" name="new_training_certifications[{{ $index }}][type]" class="text-xs" required/>
                        </div>
                        <div class="w-1/12 ps-3 text-xs">
                            <x-input type="number" wire:model="new_training_certifications.{{ $index }}.hours" name="new_training_certifications[{{ $index }}][hours]" class="text-xs" required/>
                        </div>
                    </div>
                @endforeach
                <div class="mt-3 flex space-x-3 items-center">
                    <div class="w-full">
                        <x-button wire:click.prevent="addField" label="Add New" class="py-2 w-full text-base bg-primary text-white tracking-wide font-medium rounded hover:bg-[#334979] hover:text-white duration-300 focus:outline-none"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 p-0 flex space-x-3 justify-end">
        <div class="w-2/12">
            <x-button wire:click.prevent="cancel" label="Cancel" class="px-5 py-2.5 w-full bg-danger font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-red-600 hover:scale-105 duration-150"/>
        </div>
        <div class="w-2/12">
            <x-button wire:click.prevent="save" label="Save" class="px-5 py-2.5 w-full bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover"/>
        </div>
    </div>
</div>
