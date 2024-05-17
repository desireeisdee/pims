<div class="mx-auto py-8 px-10" >
    @if ($storeMode || $updateMode)
        <section>
            <div class="flex justify-between">
                <div class="w-3/4">
                    <h4 class="font-bold text-2xl text-gray-darkest">Edit School Resources</h4>
                </div>
                <div class="w-1/4 flex space-x-2 text-end">
                    <x-button wire:click.prevent="edit" label="Edit" class="w-32 px-5 bg-primary text-white tracking-wider hover:hover:bg-primary-hover hover:scale-105 duration-100"/>
                </div>
            </div>
            <div class="m-0 p-0">
                <livewire:dynamic-form.funded-item-form :id="$school->id" />
            </div>
            <div class="m-0 mb-4 p-0 flex space-x-3 justify-end">
                <x-button wire:click.prevent="cancel" label="Cancel" class="px-5 bg-danger font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-red-600 hover:scale-105 duration-150"/>
                @if ($storeMode == true)
                    <x-button wire:click.prevent="store" label="Save" class="px-5 bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover hover:scale-105 duration-150"/>
                @else
                    <x-button wire:click.prevent="update" label="Save" class="px-5 bg-primary font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-primary-hover hover:scale-105 duration-150"/>
                @endif

            </div>
        </section>
    @elseif ($showMode)
        <section>
            <div class="flex justify-between">
                <div class="w-3/4">
                    <h4 class="font-bold text-2xl text-gray-darkest">School's Resources</h4>
                </div>
                <div class="w-1/4 flex space-x-2 text-end">
                    <x-button wire:click.prevent="edit" label="Edit" class="w-32 px-5 bg-primary text-white tracking-wider hover:hover:bg-primary-hover hover:scale-105 duration-100"/>
                </div>
            </div>
            <div class="mt-7">
                <livewire:datatable.school.appointment-fundings-datatable :id="$school->id" />
            </div>
        </section>
    @endif
    <script>
        function appointmentFields(with_appointments_fundings) {
            return {
                new_appointments: with_appointments_fundings ? [] : [{}],

                addNewField() {
                    this.new_appointments.push({
                        title: '',
                        appointment: '',
                        fund_source: '',
                        incumbent_teaching: '',
                        incumbent_non_teaching: ''
                    });
                },
                removeField(index) {
                    this.new_appointments.splice(index, 1);
                }
            };
        }
    </script>
</div>
