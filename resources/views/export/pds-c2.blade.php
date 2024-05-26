
<html>
    <table>
        <tr></tr>
        <tr>
            <th colspan="13" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic;border: 1px solid #000000;">IV.  CIVIL SERVICE ELIGIBILITY</th>
        </tr>
        <tr>
            <th rowspan="2">27.</th>
            <th rowspan="2" colspan="4">CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE BARANGAY ELIGIBILITY / DRIVER'S LICENSE</th>
            <th rowspan="2">RATING <br> (If Applicable)</th>
            <th rowspan="2" colspan="2">DATE OF EXAMINATION / CONFERMENT</th>
            <th rowspan="2" colspan="3">PLACE OF EXAMINATION / CONFERMENT</th>
            <th colspan="2">LICENSE (if applicable)</th>
        </tr>
        <tr>
            <th>NUMBER</th>
            <th>Date of Validity</th>
        </tr>

        @foreach ($personnel->civilServiceEligibilities as $civil_service)
            <tr>
                <td colspan="5" style="border: 2px solid #000000;">
                    {{ $civil_service->title }}
                </td>
                <td style="border: 2px solid #000000;">
                    {{ $civil_service->rating }}
                </td>
                <td colspan="2" style="border: 2px solid #000000;">
                    {{ $civil_service->date_of_exam }}
                </td>
                <td colspan="3" style="border: 2px solid #000000;">
                    {{ $civil_service->place_of_exam }}
                </td>
                <td style="border: 2px solid #000000;">
                    {{ $civil_service->license_num }}
                </td>
                <td style="border: 2px solid #000000;">
                    {{ $civil_service->license_date_of_validity }}
                </td>
            </tr>
        @endforeach
        @for ($i = 0; $i < (8 - count($personnel->civilServiceEligibilities)); $i++)
            <tr>
                <td colspan="5" style="border: 2px solid #000000;">
                </td>
                <td style="border: 2px solid #000000;">
                </td>
                <td colspan="2" style="border: 2px solid #000000;">
                </td>
                <td colspan="3" style="border: 2px solid #000000;">
                </td>
                <td style="border: 2px solid #000000;">
                </td>
                <td style="border: 2px solid #000000;">
                </td>
            </tr>
        @endfor

        <tr>
            <th colspan="13" style="background-color: #C0C0C0; color: #red; font-weight:500; font-style:italic;border: 2px solid #000000;">(Continue on separate sheet if necessary)</th>
        </tr>
        {{-- WORK EXPERIENCE --}}
        <tr>
            <th colspan="13" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic; border-inline: 1px solid #000000;">
                V.  WORK EXPERIENCE
            </th>
        </tr>
        <tr>
            <th colspan="13" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic; border-inline: 1px solid #000000;border-bottom: 2px solid #000000;">
                (Include private employment.  Start from your recent work) Description of duties should be indicated in the attached Work Experience sheet.
            </th>
        </tr>

        <tr>
            <th rowspan="2">28.</th>
            <th rowspan="2" colspan="2">
                INCLUSIVE DATES (mm/dd/yyyy)
            </th>
            <th rowspan="3" colspan="3">
                POSITION TITLE <br>(Write in full/Do not abbreviate)
            </th>
            <th rowspan="3" colspan="3">
                DEPARTMENT / AGENCY / OFFICE / COMPANY <br>(Write in full/Do not abbreviate)
            </th>
            <th rowspan="3">
                MONTHLY SALARY
            </th>
            <th rowspan="3">
                {{ htmlspecialchars('SALARY/ JOB/ PAY GRADE (if applicable) & STEP  (Format "00-0")/ INCREMENT') }}
            </th>
            <th rowspan="3">
                STATUS OF APPOINTMENT
            </th>
            <th rowspan="3">
                GOV'T SERVICE <br>(Y/ N)
            </th>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th colspan="2">From</th>
            <th>To</th>
        </tr>

        @foreach ($personnel->workExperiences as $work_experience)
            <tr>
                <td colspan="2">
                    {{ $work_experience->inclusive_from }}
                </td>
                <td>
                    {{ $work_experience->inclusive_to }}
                </td>
                <td colspan="3">
                    {{ $work_experience->title }}
                </td>
                <td colspan="3">
                    {{ $work_experience->company }}
                </td>
                <td>
                    {{ $work_experience->monthly_salary }}
                </td>
                <td>
                    {{ $work_experience->paygrade_step_increment }}
                </td>
                <td>
                    {{ $work_experience->appointment }}
                </td>
                <td>
                    {{ $work_experience->is_gov_service == true ? 'Y' : 'N' }}
                </td>
            </tr>
        @endforeach
        @for ($i = 0; $i < (28 - count($personnel->workExperiences)); $i++)
            <tr>
                <td colspan="5" style="border: 2px solid #000000;">
                </td>
                <td style="border: 2px solid #000000;">
                </td>
                <td colspan="2" style="border: 2px solid #000000;">
                </td>
                <td colspan="3" style="border: 2px solid #000000;">
                </td>
                <td style="border: 2px solid #000000;">
                </td>
                <td style="border: 2px solid #000000;">
                </td>
            </tr>
        @endfor

        <tr>
            <th colspan="13" style="background-color: #C0C0C0; color: #red; font-weight:500; font-style:italic;border: 2px solid #000000;">(Continue on separate sheet if necessary)</th>
        </tr>

        {{-- FOOTER --}}
        <tr>
            <th colspan="3" style="background-color: #C0C0C0; border: 2px solid #000000; font-weight:700">
                SIGNATURE
            </th>
            <th colspan="5" style=" border: 2px solid #000000; font-weight:700">
            </th>
            <th style="background-color: #C0C0C0; border: 2px solid #000000; font-weight:700">
                DATE
            </th>
            <th colspan="4" style="border: 2px solid #000000; font-weight:700">
            </th>
        </tr>
        <tr>
            <td colspan="13" style="border: 1px solid #000000; font-weight:700; font-family: Arial, font-size: 10; font-style: italic; text-align: right">
                CS FORM 212 (Revised 2017), Page 1 of 4
            </td>
        </tr>
    </table>
</html>
