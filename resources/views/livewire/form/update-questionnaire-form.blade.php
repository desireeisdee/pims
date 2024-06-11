<div x-data="">
    <div class="mt-5">
        <div>
            <div class="mt-2">
                <div>
                    <div class="mt-3 mb-6"  x-data="{ open: {{ $consanguinity_third_degree }} }">
                        <h6 class="text-sm mt-3 mb-2 font-medium">
                            Are you related to core appointing or re-appointing or recommending the promotion or office or to the person who has immediate supervision over Bureau or Department where you will be appointed.
                        </h6>
                        <div class="mx-5 w-[45rem] mt-3 flex space-x-3 items-center">
                            <div class="w-10/12">
                                <p class="text-sm font-medium">a. within the third degree?</p>
                            </div>
                            <div class="w-2/12">
                                <div class="flex space-x-8 items-center">
                                    <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1 me-5">
                                        <div>
                                            <input type="radio" name="consanguinity_third_degree" wire:model="consanguinity_third_degree" id="consanguinity_third_degree_yes" value="1" class="peer hidden" {{ ($consanguinity_third_degree == true ? 'checked' : '') }}>
                                            <label x-on:click="open = !open" for="consanguinity_third_degree_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                        </div>

                                        <div>
                                            <input type="radio" name="consanguinity_third_degree" wire:model="consanguinity_third_degree" id="consanguinity_third_degree_no" value="0" class="peer hidden" {{ ($consanguinity_third_degree == false ? 'checked' : '') }}>
                                            <label x-on:click="open = !open" for="consanguinity_third_degree_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-5 w-[45rem] mt-3 flex space-x-3 items-center">
                            <div class="w-10/12">
                                <p class="text-sm font-medium">b. within the fourth degree (for Local Government Unit - Career Employees)?</p>
                            </div>
                            <div class="w-2/12">
                                <div class="flex space-x-8 items-center">
                                    <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1 me-5">
                                        <div>
                                            <input type="radio" name="consanguinity_fourth_degree" wire:model="consanguinity_fourth_degree" id="consanguinity_fourth_degree_yes" value="1" class="peer hidden" {{ ($consanguinity_fourth_degree == true ? 'checked' : '') }}>
                                            <label for="consanguinity_fourth_degree_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                        </div>

                                        <div>
                                            <input type="radio" name="consanguinity_fourth_degree" wire:model="consanguinity_fourth_degree" id="consanguinity_fourth_degree_no" value="0" class="peer hidden" {{ ($consanguinity_fourth_degree == false ? 'checked' : '') }}>
                                            <label for="consanguinity_fourth_degree_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="open" class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                            <span class="w-[20rem]">
                                <x-input wire:model="consanguinity_third_degree_details" class="form-control w-full" type="text" label="If YES, give details" id="consanguinity_third_degree_details"/>
                            </span>
                        </div>
                    </div>

                    <div class="mt-3 mb-6">
                        <span x-data="{ open: {{ $found_guilty_administrative_offense }} }">
                            <div class="w-[45rem] mt-3 flex space-x-3 items-center">
                                <div class="w-10/12">
                                    <p class="text-sm font-medium">Have you ever been found guilty of any administrative offense?</p>
                                </div>
                                <div class="w-2/12 ps-5">
                                    <div class="flex space-x-8 items-center">
                                        <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                                            <div>
                                                <input type="radio" name="found_guilty_administrative_offense" wire:model="found_guilty_administrative_offense" id="found_guilty_administrative_offense_yes" value="1" class="peer hidden" {{ ($found_guilty_administrative_offense == true ? 'checked' : '') }}>
                                                <label x-on:click="open = ! open" for="found_guilty_administrative_offense_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="found_guilty_administrative_offense" wire:model="found_guilty_administrative_offense" id="found_guilty_administrative_offense_no" value="0" class="peer hidden" {{ ($found_guilty_administrative_offense == false ? 'checked' : '') }}>
                                                <label x-on:click="open = ! open" for="found_guilty_administrative_offense_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="open" class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                <span class="w-[20rem]">
                                    <x-input wire:model="administrative_offense_details" class="form-control w-full" type="text" label="If YES, give details" id="administrative_offense_details"/>
                                </span>
                            </div>
                        </span>
                        <span x-data="{ open: {{ $criminally_charged }} }">
                            <div class=" w-[45rem] mt-3 flex space-x-3 items-center">
                                <div class="w-10/12">
                                    <p class="text-sm font-medium">Have you been criminally charged before any court?</p>
                                </div>
                                <div class="w-2/12 ps-5">
                                    <div class="flex space-x-8 items-center">
                                        <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                                            <div>
                                                <input type="radio" name="criminally_charged" wire:model="criminally_charged" id="criminally_charged_yes" value="1" class="peer hidden" {{ ($criminally_charged == true ? 'checked' : '') }}>
                                                <label x-on:click="open = ! open" for="criminally_charged_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="criminally_charged" wire:model="criminally_charged" id="criminally_charged_no" value="0" class="peer hidden" {{ ($criminally_charged == false ? 'checked' : '') }}>
                                                <label x-on:click="open = ! open" for="criminally_charged_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span x-show="open">
                                <div class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                    <span class="w-[20rem]">
                                        <x-input class="form-control w-full" type="text" label="If YES, give details" id="criminally_charged_details" wire:model="criminally_charged_details"/>
                                    </span>
                                </div>
                                <div class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                    <span class="w-[20rem]">
                                        <x-input class="form-control w-full" type="date" label="Date Filed" id="criminally_charged_date_filed" wire:model="criminally_charged_date_filed"/>
                                    </span>
                                </div>
                                <div class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                    <span class="w-[20rem]">
                                        <x-input class="form-control w-full" type="text" label="If YES, give details" id="criminally_charged_status" wire:model="criminally_charged_status"/>
                                    </span>
                                </div>
                            </span>
                        </span>
                    </div>

                    <div class="mt-3 mb-6" x-data="{ open: {{ $convicted_crime }} }">
                        <div class="w-[45rem] mt-3 flex space-x-3 items-center">
                            <div class="w-10/12">
                                <p class="text-sm font-medium">Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</p>
                            </div>
                            <div class="w-2/12 ps-5">
                                <div class="flex space-x-8 items-center">
                                    <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                                        <div>
                                            <input type="radio" name="convicted_crime" wire:model="convicted_crime" id="convicted_crime_yes" value="1" class="peer hidden" {{ ($convicted_crime == true ? 'checked' : '') }}>
                                            <label x-on:click="open = !open" for="convicted_crime_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                        </div>

                                        <div>
                                            <input type="radio" name="convicted_crime" wire:model="convicted_crime" id="convicted_crime_no" value="0" class="peer hidden" {{ ($criminally_charged == false ? 'checked' : '') }}>
                                            <label x-on:click="open = !open" for="convicted_crime_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="open" class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                            <span class="w-[20rem]">
                                <x-input class="form-control w-full" type="text" label="If YES, give details" id="convicted_crime_details" wire:model="convicted_crime_details"/>
                            </span>
                        </div>
                    </div>

                    <div class="mt-3 mb-6" x-data="{ open: {{ $separated_from_service }} }">
                        <div class="w-[45rem] mt-3 flex space-x-3 items-center">
                            <div class="w-10/12">
                                <p class="text-sm font-medium">Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?</p>
                            </div>
                            <div class="w-2/12 ps-5">
                                <div class="flex space-x-8 items-center">
                                    <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                                        <div>
                                            <input type="radio" name="separated_from_service" wire:model="separated_from_service" id="separated_from_service_yes" value="1" class="peer hidden" {{ ($separated_from_service == true ? 'checked' : '') }}>
                                            <label x-on:click="open = !open" for="separated_from_service_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                        </div>

                                        <div>
                                            <input type="radio" name="separated_from_service" wire:model="separated_from_service" id="separated_from_service_no" value="0" class="peer hidden" {{ ($separated_from_service == false ? 'checked' : '') }}>
                                            <label x-on:click="open = !open" for="separated_from_service_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="open" class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                            <span class="w-[20rem]">
                                <x-input class="form-control w-full" type="text" label="If YES, give details" id="separation_details" wire:model="separation_details"/>
                            </span>
                        </div>
                    </div>

                    <div class="mt-3 mb-6">
                        <span x-data="{ open: {{ $candidate_last_year }} }">
                            <div class="w-[45rem] mt-3 flex space-x-3 items-center">
                                <div class="w-10/12">
                                    <p class="text-sm font-medium">Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</p>
                                </div>
                                <div class="w-2/12 ps-5">
                                    <div class="flex space-x-8 items-center">
                                        <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                                            <div>
                                                <input type="radio" name="candidate_last_year" wire:model="candidate_last_year" id="candidate_last_year_yes" value="1" class="peer hidden" {{ ($candidate_last_year == true ? 'checked' : '') }}>
                                                <label x-on:click="open = !open" for="candidate_last_year_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="candidate_last_year" wire:model="candidate_last_year" id="candidate_last_year_no" value="0" class="peer hidden" {{ ($candidate_last_year == false ? 'checked' : '') }}>
                                                <label x-on:click="open = !open" for="candidate_last_year_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  x-show="open" class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                <span class="w-[20rem]">
                                    <x-input class="form-control w-full" type="text" label="If YES, give details" id="candidate_details" wire:model="candidate_details"/>
                                </span>
                            </div>
                        </span>

                        <span x-data="{ open: {{ $resigned_to_campaign }} }">
                            <div class="mx-5 w-[45rem] mt-3 flex space-x-3 items-center">
                                <div class="w-10/12">
                                    <p class="text-sm font-medium">Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?</p>
                                </div>
                                <div class="w-2/12">
                                    <div class="flex space-x-8 items-center">
                                        <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                                            <div>
                                                <input type="radio" name="resigned_to_campaign" wire:model="resigned_to_campaign" id="resigned_to_campaign_yes" value="1" class="peer hidden" {{ ($resigned_to_campaign == true ? 'checked' : '') }}>
                                                <label x-on:click="open = !open" for="resigned_to_campaign_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="resigned_to_campaign" wire:model="resigned_to_campaign" id="resigned_to_campaign_no" value="0" class="peer hidden" {{ ($resigned_to_campaign == false ? 'checked' : '') }}>
                                                <label x-on:click="open = !open" for="resigned_to_campaign_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                <span x-show="open" class="w-[20rem]">
                                    <x-input class="form-control w-full" type="text" label="If YES, give details" id="resigned_campaign_details" wire:model="resigned_campaign_details"/>
                                </span>
                            </div>
                        </span>
                    </div>

                    <div class="mt-3 mb-6" x-data="{ open: {{ $immigrant_status }} }">
                        <div class="mx-5 w-[45rem] mt-3 flex space-x-3 items-center">
                            <div class="w-10/12">
                                <p class="text-sm font-medium">Have you acquired the status of an immigrant or permanent resident of another country?</p>
                            </div>
                            <div class="w-2/12">
                                <div class="flex space-x-8 items-center">
                                    <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                                        <div>
                                            <input type="radio" name="immigrant_status" wire:model="immigrant_status" id="immigrant_status_yes" value="1" class="peer hidden" {{ ($immigrant_status == true ? 'checked' : '') }}>
                                            <label x-on:click="open = !open" for="immigrant_status_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                        </div>

                                        <div>
                                            <input type="radio" name="immigrant_status" wire:model="immigrant_status" id="immigrant_status_no" value="0" class="peer hidden" {{ ($immigrant_status == false ? 'checked' : '') }}>
                                            <label x-on:click="open = !open" for="immigrant_status_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="open" class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                            <span class="w-[20rem]">
                                <x-input class="form-control w-full" type="text" label="If YES, give details (country): " id="immigrant_country_details" wire:model="immigrant_country_details"/>
                            </span>
                        </div>
                    </div>

                    <div class="mt-3 mb-6">
                        <h6 class="text-sm my-3 mb-2 font-medium">
                            Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for  Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
                        </h6>
                        <span x-data="{ open: {{ $member_indigenous_group }} }">
                            <div class="mx-5 w-[45rem] mt-3 flex space-x-3 items-center">
                                <div class="w-10/12">
                                    <p class="text-sm font-medium">a. Are you a member of any indigenous group?</p>
                                </div>
                                <div class="w-2/12">
                                    <div class="flex space-x-8 items-center">
                                        <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1">
                                            <div>
                                                <input type="radio" name="member_indigenous_group" wire:model="member_indigenous_group" id="member_indigenous_group_yes" value="1" class="peer hidden" {{ ($member_indigenous_group == true ? 'checked' : '') }}>
                                                <label x-on:click="open = !open" for="member_indigenous_group_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="member_indigenous_group" wire:model="member_indigenous_group" id="member_indigenous_group_no" value="0" class="peer hidden" {{ ($member_indigenous_group == false ? 'checked' : '') }}>
                                                <label x-on:click="open = !open" for="member_indigenous_group_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="open" class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                <span class="w-[20rem]">
                                    <x-input class="form-control w-full" type="text" label="If YES, give details" id="indigenous_group_details" wire:model="indigenous_group_details" />
                                </span>
                            </div>
                        </span>

                        <span x-data="{ open: {{ $person_with_disability }} }">
                            <div class="mx-5 w-[45rem] mt-3 flex space-x-3 items-center">
                                <div class="w-10/12">
                                    <p class="text-sm font-medium">b. Are you a person with disability?</p>
                                </div>
                                <div class="w-2/12">
                                    <div class="flex space-x-8 items-center">
                                        <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1 me-5">
                                            <div>
                                                <input type="radio" name="person_with_disability" wire:model="person_with_disability" id="person_with_disability_yes" value="1" class="peer hidden" {{ ($person_with_disability == true ? 'checked' : '') }}>
                                                <label x-on:click="open = !open"  for="person_with_disability_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="person_with_disability" wire:model="person_with_disability" id="person_with_disability_no" value="0" class="peer hidden" {{ ($person_with_disability == false ? 'checked' : '') }}>
                                                <label x-on:click="open = !open"  for="person_with_disability_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="open"  class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                <span class="w-[20rem]">
                                    <x-input class="form-control w-full" type="text" label="If YES, please specify ID No: " id="disability_id_no" wire:model="disability_id_no"/>
                                </span>
                            </div>
                        </span>

                        <span x-data="{ open: {{ $solo_parent }} }">
                            <div class="mx-5 w-[45rem] mt-3 flex space-x-3 items-center">
                                <div class="w-10/12">
                                    <p class="text-sm font-medium">c. Are you a solo parent?</p>
                                </div>
                                <div class="w-2/12">
                                    <div class="flex space-x-8 items-center">
                                        <div class="grid w-full grid-cols-2 gap-1 rounded-xl bg-gray-200 p-1 me-5">
                                            <div>
                                                <input type="radio" name="solo_parent" wire:model="solo_parent" id="solo_parent_yes" value="1" class="peer hidden" {{ ($solo_parent == true ? 'checked' : '') }}>
                                                <label x-on:click="open = ! open" for="solo_parent_yes" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-cyan-500 peer-checked:font-bold peer-checked:text-white">Yes</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="solo_parent" wire:model="solo_parent" id="solo_parent_no" value="0" class="peer hidden" {{ ($solo_parent == false ? 'checked' : '') }}>
                                                <label x-on:click="open = ! open" for="solo_parent_no" class="block cursor-pointer select-none rounded-xl px-3 p-1.5 text-xs text-center peer-checked:bg-yellow-500 peer-checked:font-bold peer-checked:text-white">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="open"  class="mx-5 mt-2.5 w-[57.5rem] flex justify-end">
                                <span class="w-[20rem]">
                                    <x-input class="form-control w-full" type="text" label="If YES, please specify ID No: " id="solo_parent_id_no" wire:model="solo_parent_id_no"/>
                                </span>
                            </div>
                        </span>
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
            <x-button wire:click.prevent="save" label="Save" class="px-5 py-2.5 w-full bg-main font-semibold text-xs text-white uppercase tracking-widest hover:hover:bg-main-hover"/>
        </div>
    </div>
</div>
