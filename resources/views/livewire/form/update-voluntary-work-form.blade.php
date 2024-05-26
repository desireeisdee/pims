<div>
    <h4 class="font-bold text-2xl text-gray-darkest">Voluntary Work</h4>
    <div class="mt-5">
        <div class="mt-3">
            <div class="w-full flex space-x-2 h-10 border border-gray-100 bg-gray-lightest items-center">
                <h6 class="w-2/12 text-center">
                    <span class="text-xs text-gray-dark font-semibold uppercase">Start Date</span>
                </h6>
                <h6 class="w-2/12 text-center">
                    <span class="text-xs text-gray-dark font-semibold uppercase">End Date</span>
                </h6>
                <h6 class="w-3/12 text-center">
                    <span class="text-xs text-gray-dark font-semibold uppercase">NAME & ADDRESS OF ORGANIZATION  </span>
                </h6>
                <h6 class="w-3/12">
                    <span class="text-center text-xs text-gray-dark font-semibold uppercase">Position Title</span>
                </h6>
                <h6 class="w-1/12">
                    <span class="text-center text-xs text-gray-dark font-semibold uppercase">No. of Hours</span>
                </h6>
            </div>
            <div class="mt-2">
                <!-- Old Data Children -->
                @foreach ($old_voluntary_works as $index => $old_voluntary_work)
                    <div class="mb-2 px-3 w-full space-x-3 h-12 border border-gray-200 rounded focus:outline-none">
                        <div class="mb-3 flex space-x-2">
                            <div class="w-2/12 flex space-x-2">
                                <x-input id="inclusive_from_{{ $index }}" type="date" wire:model="old_voluntary_works.{{ $index }}.inclusive_from" name="old_voluntary_works[{{ $index }}][inclusive_from]" required/>
                            </div>
                            <div class="w-2/12">
                                <x-input id="inclusive_to_{{ $index }}" type="date" wire:model="old_voluntary_works.{{ $index }}.inclusive_to" name="old_voluntary_works[{{ $index }}][inclusive_to]" required/>
                            </div>
                            <div class="w-3/12">
                                <x-input id="organization{{ $index }}" type="text" wire:model="old_voluntary_works.{{ $index }}.organization" name="old_voluntary_works[{{ $index }}][organization]" required/>
                            </div>
                            <div class="w-3/12">
                                <x-input id="position_{{ $index }}" type="text" wire:model="old_voluntary_works.{{ $index }}.position" name="old_voluntary_works[{{ $index }}][position]" required/>
                            </div>
                            <div class="w-1/12">
                                <x-input id="hours_{{ $index }}" type="number" wire:model="old_voluntary_works.{{ $index }}.hours" name="old_voluntary_works[{{ $index }}][hours]" required/>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- New Data Children -->
                @foreach ($new_voluntary_works as $index => $new_voluntary_work)
                    <div class="mb-2 px-3 w-full space-x-3 h-12 border border-gray-200 rounded focus:outline-none">
                        <div class="mb-3 flex space-x-2">
                            <div class="w-2/12 flex space-x-2">
                                <x-input id="inclusive_from_{{ $index }}" type="date" wire:model="new_voluntary_works.{{ $index }}.inclusive_from" name="new_voluntary_works[{{ $index }}][inclusive_from]" required/>
                            </div>
                            <div class="w-2/12">
                                <x-input id="inclusive_to_{{ $index }}" type="date" wire:model="new_voluntary_works.{{ $index }}.inclusive_to" name="new_voluntary_works[{{ $index }}][inclusive_to]" required/>
                            </div>
                            <div class="w-3/12">
                                <x-input id="organization{{ $index }}" type="text" wire:model="new_voluntary_works.{{ $index }}.organization" name="new_voluntary_works[{{ $index }}][organization]" required/>
                            </div>
                            <div class="w-3/12">
                                <x-input id="position_{{ $index }}" type="text" wire:model="new_voluntary_works.{{ $index }}.position" name="new_voluntary_works[{{ $index }}][position]" required/>
                            </div>
                            <div class="w-1/12">
                                <x-input id="hours_{{ $index }}" type="number" wire:model="new_voluntary_works.{{ $index }}.hours" name="new_voluntary_works[{{ $index }}][hours]" required/>
                            </div>
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
