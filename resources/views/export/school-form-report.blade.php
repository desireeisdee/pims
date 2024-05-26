
<html>
    {{-- HEADER --}}
    <table>
        <tr>
            <td rowspan="6">
                <img src="C:\Users\acer\Documents\GitHub\pmis\public\image\kagawaran-ng-edukasyon-logo.png" alt="kagawaran-ng-edukasyon-logo" width="100">
            </td>
            <td></td>
            <td colspan="14">
                <b>School Form 7  School Personnel Assignment List and Basic Profile</b>
            </td>
            <td rowspan="4" colspan="3">
                <img src="C:\Users\acer\Documents\GitHub\pmis\public\image\deped-logo.png" alt="deped-logo" width="100">
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="14">{{ htmlspecialchars('This replaced Form 12-Monthly Status Report for Teachers, Form 19-Assignment List,') }}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="14">{{ htmlspecialchars('Form 29-Teacher Program and Form 31-Summary Information of Teachers') }}</td>
        </tr>
        <tr></tr>
        <tr>
            <td colspan="2">School ID</td>
            <td colspan="3" style="border: 1px solid #000000;">{{ $school->school_id }} </td>
            <td>Region</td>
            <td style="border: 1px solid #000000;">{{ $school->division }}</td>
            <td colspan="2">Division</td>
            <td colspan="5" style="border: 1px solid #000000;">{{ $school->division }}</td>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
            <td colspan="2">School Name</td>
            <td colspan="5" style="border: 1px solid #000000;">{{ $school->school_name }} </td>
            <td colspan="2">District</td>
            <td colspan="5" style="border: 1px solid #000000;">{{ $school->district->name }}</td>
            <td colspan="2">School Year</td>
            <td colspan="2" style="border: 1px solid #000000;">2023-2024</td>
        </tr>
    </table>
    {{-- FUNDED-ITEMS AND APPOINTMENTS --}}
    <table>
        <tr>
            <td colspan="4" style="border: 1px solid #000000;">{{ htmlspecialchars(__('(A) Nationally-Funded Teaching & Teaching Related Items')) }}</td>
            <td></td>
            <td colspan="4" style="border: 1px solid #000000;">{{ htmlspecialchars(__('(B) Nationally-Funded Non Teaching Items')) }}</td>
            <td></td>
            <td colspan="9" style="border: 1px solid #000000;">{{ htmlspecialchars(__('(C) Other Appointments and Funding Sources')) }}</td>
        </tr>
        <tr>
            {{-- For Teaching --}}
            <td rowspan="2" colspan="2" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Title of Plantilla Position (as appeared  in the appointment document/PSIPOP)')) }}
            </td>
            <td rowspan="2" colspan="2" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Number of Incumbent)')) }}
            </td>

            <td rowspan="2"></td>
            {{-- For Non-Teaching --}}
            <td rowspan="2" colspan="3" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Title of Plantilla Position (as appeared  in the appointment document/PSIPOP)')) }}
            </td>
            <td rowspan="2" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Number of Incumbent)')) }}
            </td>

            <td rowspan="2"></td>
            {{-- For Appointment --}}
            <td rowspan="2" colspan="3" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Title of Designation (Designation as appeared in the contract/document: Teacher, Clerk, Security Guard, Driver etc)')) }}
            </td>
            <td rowspan="2" colspan="2" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Appointment: (Contractual, Substitute, Volunteer,  others specify)')) }}</td>
            <td rowspan="2" colspan="2" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__("Fund Source SEF, PTA, N's  etc.")) }}
            </td>
            <td rowspan="1"  colspan="2" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Number of Incumbent)')) }}
            </td>
        </tr>
        <tr>
            <td rowspan="1" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Teaching')) }}
            </td>
            <td rowspan="1" style="border: 1px solid #000000;">
                {{ htmlspecialchars(__('Non-Teaching')) }}
            </td>
        </tr>
        {{-- BLANK DATA --}}
        <tr>
            {{-- For Teaching --}}
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Non-Teaching --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Appointment --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
        </tr>
        <tr>
            {{-- For Teaching --}}
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Non-Teaching --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Appointment --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
        </tr>
        <tr>
            {{-- For Teaching --}}
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Non-Teaching --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Appointment --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
        </tr>
        <tr>
            {{-- For Teaching --}}
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Non-Teaching --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Appointment --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
        </tr>
        <tr>
            {{-- For Teaching --}}
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Non-Teaching --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>

            <td></td>
            {{-- For Appointment --}}
            <td colspan="3" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td colspan="2" style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
            <td style="border: 1px solid #000000;">
                -
            </td>
        </tr>
    </table>
    {{-- PERSONNELS --}}
    <table>
        <thead>
            <tr>
                <th rowspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Employee No. (or Tax Identification Number -T.I.N.)') }}</th>
                <th rowspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Name of School Personnel (Arrange by Position, Descending)') }}</th>
                <th rowspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Sex') }}</th>
                <th rowspan="2" colspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Fund Source') }}</th>
                <th rowspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Position/ Designation') }}</th>
                <th rowspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Nature of Appointment/ Employment Status') }}</th>
                <th rowspan="1" colspan="5" style="border: 1px solid #000000;">{{ htmlspecialchars('EDUCATIONAL QUALIFICATION') }}</th>
                <th rowspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Subject Taught (include Grade & Section), Advisory Class & Other Ancillary Assignment') }}</th>
                <th rowspan="1" colspan="4" style="border: 1px solid #000000;">{{ htmlspecialchars('* Daily Program (time duration)') }}</th>
                <th rowspan="2" colspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Remark/s (For Detailed Items, Indicate name of school/office, For IP\'s -Ethnicity)') }}</th>
            </tr>
            <tr>
                <th rowspan="1" style="border: 1px solid #000000;">{{ htmlspecialchars('Degree / Post Graduate') }}</th>
                <th rowspan="1" colspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Major/ Specialization') }}</th>
                <th rowspan="1" colspan="2" style="border: 1px solid #000000;">{{ htmlspecialchars('Minor') }}</th>
                <th rowspan="1" style="border: 1px solid #000000;">{{ htmlspecialchars(__('DAY (M/T/W/TH/F)')) }}</th>
                <th rowspan="1" style="border: 1px solid #000000;">{{ htmlspecialchars('From (00:00)') }}</th>
                <th rowspan="1" style="border: 1px solid #000000;">{{ htmlspecialchars('To (00:00)') }}</th>
                <th rowspan="1" style="border: 1px solid #000000;">{{ htmlspecialchars('Total Actual Teaching Minutes Assignment per Week') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($school->personnels as $personnel)
        <tr style="border: 2px solid #000000;">
            <td rowspan="{{ count($personnel->assignmentDetails) }}" style="border: 1px solid #000000;">
                {{ $personnel->personnel_id }}
            </td>
            <td rowspan="{{ count($personnel->assignmentDetails) }}" style="border: 1px solid #000000;">
                {{ htmlspecialchars($personnel->fullName()) }}
            </td>
            <td rowspan="{{ count($personnel->assignmentDetails) }}" style="border: 1px solid #000000;">
                {{ htmlspecialchars($personnel->sex) }}
            </td>
            <td rowspan="{{ count($personnel->assignmentDetails) }}" colspan="2" style="border: 1px solid #000000;">
                {{ htmlspecialchars($personnel->fund_source) }}
            </td>
            <td rowspan="{{ count($personnel->assignmentDetails) }}" style="border: 1px solid #000000;">
                {{ htmlspecialchars($personnel->position->title) }}
            </td>
            <td rowspan="{{ count($personnel->assignmentDetails) }}" style="border: 1px solid #000000;">
                {{ htmlspecialchars($personnel->appointment) }}
            </td>
            <td rowspan="{{ count($personnel->assignmentDetails) }}" style="border: 1px solid #000000;">
                {{-- {{ $personnel->graduateEducation ? htmlspecialchars($personnel->graduateEducation->degree_course) : '' }} --}}-
            </td>
            <td rowspan="{{ count($personnel->assignmentDetails) }}" colspan="2" style="border: 1px solid #000000;">{{-- Major --}}-</td>
            <td rowspan="{{ count($personnel->assignmentDetails) }}" colspan="2" style="border: 1px solid #000000;">{{-- Minor --}}-</td>
            @foreach ($personnel->assignmentDetails as $assignment_detail )
            <td style="border: 1px solid #000000;">
                {{ $assignment_detail->assignment }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $assignment_detail->dtr_day }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $assignment_detail->dtr_from }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $assignment_detail->dtr_to }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $assignment_detail->teaching_minutes_per_week }}
            </td>
            @endforeach
            <td rowspan="{{ count($personnel->assignmentDetails) }}" style="border: 1px solid #000000;">
                {{-- remarks --}}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{-- FOOTER --}}
    <table>
        <tr>
            <td colspan="13">
                {{ htmlspecialchars('GUIDELINES:') }}
            </td>
            <td></td>
            <td colspan="2">
                {{ htmlspecialchars('Submitted by:') }}
            </td>
        </tr>
        <tr>
            <td rowspan="2" colspan="13">
                {{ htmlspecialchars('1.  This form shall be accomplished at the beginning of the school year by the school head.   In case of movement of teachers and other personnel during SY, updated Form 19 must be submitted to the Division Office.') }}
            </td>
            <td rowspan="2"></td>
            <td rowspan="2" colspan="5">
            </td>
        </tr>
        <tr>
            <td rowspan="2" colspan="13">
                {{ htmlspecialchars('2. All school personnel, regardless of position/nature of appointment should be included in this form and  should be listed from the highest rank down to the lowest.  This form shall also serve as inventory list of school personnel.') }}
            </td>
            <td rowspan="2"></td>
            <td rowspan="2" colspan="5">
                {{ htmlspecialchars('(Signature of School Head over Printed Name)') }}
            </td>
        </tr>
        <tr>
            <td colspan="13">
                {{ htmlspecialchars('3. Please reflect subjects being taught and if teacher handling advisory class or  Ancillary Assignment.  Other administrative duties must also reported.') }}
            </td>
            <td></td>
            <td colspan="5">
                {{ htmlspecialchars('Updated as of:') }}
            </td>
        </tr>
        <tr>
            <td colspan="13">
                {{ htmlspecialchars('4. * Daily Program Column is for teaching personnel only.') }}
            </td>
            <td></td>
            <td colspan="4">
            </td>
        </tr>
        <tr>
            <td colspan="14">
            </td>
            <td colspan="4">
                {{ htmlspecialchars('School Form 7, Page 2 of') }}
            </td>
        </tr>
    </table>
</html>
