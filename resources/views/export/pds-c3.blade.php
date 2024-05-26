<html>
    <table>
        <tr></tr>
        <tr>
            <th colspan="11" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic;border: 1px solid #000000;">VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</th>
        </tr>
        <tr>
            <th rowspan="3">29.</th>
            <th rowspan="3" colspan="3">{{ htmlspecialchars('NAME & ADDRESS OF ORGANIZATION') }} <br> {{ htmlspecialchars('(Write in full)') }}</th>
            <th rowspan="2" colspan="2">INCLUSIVE DATES <br>{{ htmlspecialchars('(mm/dd/yyyy)') }} </th>
            <th rowspan="3">NUMBER OF HOURS</th>
            <th rowspan="3" colspan="4">POSITION / NATURE OF WORK</th>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th>From</th>
            <th>To</th>
        </tr>

        @foreach ($personnel->voluntaryWorks as $voluntary_work)
            <tr>
                <td colspan="4" style="border: 1px solid #000000;">
                    {{ $voluntary_work->organization }}
                </td>
                <td style="border: 1px solid #000000;">
                    {{ $voluntary_work->inclusive_from }}
                </td>
                <td  style="border: 1px solid #000000;">
                    {{ $voluntary_work->inclusive_to }}
                </td>
                <td  style="border: 1px solid #000000;">
                    {{ $voluntary_work->hours }}
                </td>
                <td colspan="4" style="border: 1px solid #000000;">
                    {{ $voluntary_work->position }}
                </td>
            </tr>
        @endforeach
        @for ($i = 0; $i < (7 - count($personnel->voluntaryWorks)); $i++)
            <tr>
                <td colspan="4" style="border: 1px solid #000000;">
                </td>
                <td style="border: 1px solid #000000;">
                </td>
                <td  style="border: 1px solid #000000;">
                </td>
                <td  style="border: 1px solid #000000;">
                </td>
                <td colspan="4" style="border: 1px solid #000000;">
                </td>
            </tr>
        @endfor

        <tr>
            <th colspan="11" style="background-color: #C0C0C0; color: #red; font-weight:500; font-style:italic;border: 2px solid #000000;">(Continue on separate sheet if necessary)</th>
        </tr>

        {{-- LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED --}}
        <tr>
            <th colspan="11" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic; border-inline: 1px solid #000000;">
                {{ htmlspecialchars('VII.  LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED') }}
            </th>
        </tr>

        <tr>
            <th rowspan="3">29.</th>
            <th rowspan="3" colspan="3">TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS<br>{{ htmlspecialchars('(Write in full)') }}</th>
            <th rowspan="2" colspan="2">INCLUSIVE DATES <br>{{ htmlspecialchars('(mm/dd/yyyy)') }}</th>
            <th rowspan="3">NUMBER OF HOURS</th>
            <th rowspan="3">Type of LD <br> {{ htmlspecialchars('(Managerial/ Supervisory/ Technical/etc)') }}</th>
            <th colspan="3">CONDUCTED/ SPONSORED BY <br>{{ htmlspecialchars('(Write in full)') }}</th>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th>From</th>
            <th>To</th>
        </tr>

        @foreach ($personnel->trainingCertifications as $training_certification)
            <tr>
                <td colspan="4" style="border: 1px solid #000000;">
                    {{ $training_certification->training_seminar_title }}
                </td>
                <td style="border: 1px solid #000000;">
                    {{ $training_certification->inclusive_from }}
                </td>
                <td style="border: 1px solid #000000;">
                    {{ $training_certification->inclusive_to }}
                </td>
                <td style="border: 1px solid #000000;">
                    {{ $training_certification->hours }}
                </td>
                <td style="border: 1px solid #000000;">
                    {{ $training_certification->type }}
                </td>
                <td colspan="3" style="border: 1px solid #000000;">
                    {{ $training_certification->sponsored }}
                </td>
            </tr>
        @endforeach
        @for ($i = 0; $i < (21 - count($personnel->trainingCertifications)); $i++)
            <tr>
                <td colspan="4" style="border: 1px solid #000000;">
                </td>
                <td style="border: 1px solid #000000;">
                </td>
                <td style="border: 1px solid #000000;">
                </td>
                <td style="border: 1px solid #000000;">
                </td>
                <td style="border: 1px solid #000000;">
                </td>
                <td colspan="3" style="border: 1px solid #000000;">
                </td>
            </tr>
        @endfor

        <tr>
            <th colspan="11" style="background-color: #C0C0C0; color: #red; font-weight:500; font-style:italic;border: 2px solid #000000;">(Continue on separate sheet if necessary)</th>
        </tr>

        {{-- LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED --}}
        <tr>
            <th colspan="11" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic; border-inline: 1px solid #000000;">
                {{ htmlspecialchars('VII.  LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED') }}
            </th>
        </tr>

        <tr>
            <th>31.</th>
            <th colspan="2">SPECIAL SKILLS and HOBBIES</th>
            <th>32.</th>
            <th colspan="5">
                INCLUSIVE DATES <br>{{ htmlspecialchars('NON-ACADEMIC DISTINCTIONS / RECOGNITION ') }} <br> {{ htmlspecialchars('(Write in full)') }}
            </th>
            <th>33.</th>
            <th colspan="2">
                {{ htmlspecialchars('MEMBERSHIP IN ASSOCIATION/ORGANIZATION') }} <br>{{ htmlspecialchars('(Write in full)') }}
            </th>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th>From</th>
            <th>To</th>
        </tr>

        {{-- @php
            // Ensure the properties are arrays if they are null
            $specialSkills = $personnel->specialSkills ?? [];
            $nonacademicDistinctions = $personnel->nonacademicDistinctions ?? [];
            $associations = $personnel->associations ?? [];

            // Calculate the maximum count among the three arrays
            $maxCount = max(count($specialSkills), count($nonacademicDistinctions), count($associations));
        @endphp

        @for ($i = 0; $i < $maxCount; $i++)
            <tr>
                <td colspan="2" style="border: 1px solid #000000;">
                    @if(isset($specialSkills[$i]))
                        {{ $specialSkills[$i] }}
                    @endif
                </td>
                <td colspan="6" style="border: 1px solid #000000;">
                    @if(isset($nonacademicDistinctions[$i]))
                        {{ $nonacademicDistinctions[$i] }}
                    @endif
                </td>
                <td colspan="3" style="border: 1px solid #000000;">
                    @if(isset($associations[$i]))
                        {{ $associations[$i] }}
                    @endif
                </td>
            </tr>
        @endfor

        @for ($i = 0; $i < (7 - $maxCount); $i++)
            <tr>
                <td colspan="2" style="border: 1px solid #000000;">
                </td>
                <td colspan="6" style="border: 1px solid #000000;">
                </td>
                <td colspan="3" style="border: 1px solid #000000;">
                </td>
            </tr>
        @endfor --}}

        <tr>
            <th colspan="11" style="background-color: #C0C0C0; color: #red; font-weight:500; font-style:italic;border: 2px solid #000000;">(Continue on separate sheet if necessary)</th>
        </tr>


        {{-- FOOTER --}}
        <tr>
            <th colspan="2" style="background-color: #C0C0C0; border: 2px solid #000000; font-weight:700">
                SIGNATURE
            </th>
            <th colspan="4" style=" border: 2px solid #000000; font-weight:700">
            </th>
            <th colspan="2" style="background-color: #C0C0C0; border: 2px solid #000000; font-weight:700">
                DATE
            </th>
            <th colspan="3" style="border: 2px solid #000000; font-weight:700">
            </th>
        </tr>
        <tr>
            <td colspan="11" style="border: 1px solid #000000; font-weight:700; font-family: Arial, font-size: 10; font-style: italic; text-align: right">
                {{ htmlspecialchars('CS FORM 212 (Revised 2017), Page 1 of 4') }}
            </td>
        </tr>
    </table>
</html>
