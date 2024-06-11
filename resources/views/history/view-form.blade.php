<div>
    <x-modal name="view-history-modal-{{ $history->id }}" max-width="md">
        <x-card title="View Log">
            <div class="px-2 py-1 text-sm">
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class="text-blueGray-600 text-sm font-bold">School ID: </label>
                    <p>{{ $history->personnel->school->school_id }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class=" text-blueGray-600 text-sm font-bold">School Name: </label>
                    <p> {{ $history->personnel->school->school_name }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class="text-blueGray-600 text-sm font-bold">Personnel ID: </label>
                    <p>{{ $history->personnel->personnel_id }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class=" text-blueGray-600 text-sm font-bold">Position: </label>
                    <p> {{ $history->personnel->position->title }} </p>
                </div>
                <div class="mt-1 mb-2 flex space-x-3">
                    <label for="" class="text-blueGray-600 text-sm font-bold">Appointment: </label>
                    <p>{{ $history->personnel->appointment }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class=" text-blueGray-600 text-sm font-bold">Salary Grade: </label>
                    <p> {{ $history->personnel->salary_grade }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class="text-blueGray-600 text-sm font-bold">Step: </label>
                    <p>{{ $history->personnel->step }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class=" text-blueGray-600 text-sm font-bold">Category: </label>
                    <p> {{ $history->personnel->category }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class=" text-blueGray-600 text-sm font-bold">Job Status: </label>
                    <p> {{ $history->personnel->job_status }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class="text-blueGray-600 text-sm font-bold">Employment Start: </label>
                    <p>{{ $history->personnel->employment_start }} </p>
                </div>
                <div class="mt-1 mb-2  flex space-x-3">
                    <label for="" class=" text-blueGray-600 text-sm font-bold">Employment End: </label>
                    <p> {{ $history->personnel->employment_end ?? 'N/A'}} </p>
                </div>
            </div>
        </x-card>
    </x-modal>
</div>
