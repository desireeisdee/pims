
<html>
    <table>
        <tr></tr>
        <tr>
            <th colspan="14">CS Form No. 212 <br> Revised 2017
            </th>
        </tr>
        <tr>
            <th style="font-size: 22px; font-weight:bold; text-align:center" colspan="14">PERSONAL DATA SHEET</th>
        </tr>
        <tr>
            <td colspan="14"  style="font-size: 8px; font-weight:bold; font-style:italic">
                WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s <br>against the person concerned.
            </td>
        </tr>
        <tr>
            <td colspan="14" style="font-size: 8px; font-weight:bold; font-style:italic">
                READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td colspan="10" style="font-size: 9px">
                Print legibly. Tick appropriate boxes (     ) and use separate sheet if necessary. Indicate N/A if not applicable.  DO NOT ABBREVIATE.
            </td>
            <td>
                1. CS ID No.
            </td>
            <td colspan="3" style="text-align: right">
                (Do not fill up. For CSC use only)
            </td>
        </tr>
        <tr></tr>

        {{-- I. PERSONAL INFORMATION --}}
        <tr>
            <th colspan="14" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic;border: 1px solid #000000;">I. PERSONAL INFORMATION</th>
        </tr>

        <tr>
            <th style="background-color: #C0C0C0; ">2.</th>
            <th colspan="2" style="background-color: #C0C0C0; ">SURNAME</th>
            <td colspan="11" style="border: 1px solid #000000;"> {{ $personnel->last_name ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; "> </th>
            <th colspan="2" style="background-color: #C0C0C0; ">FIRST NAME</th>
            <td colspan="8" style="background-color: #C0C0C0; border: 1px solid #000000;"> {{ $personnel->first_name ?? 'N/A' }}</td>
            <th colspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">NAME EXTENSION (JR., SR) <br> {{ $personnel->name_ext ?? 'N/A' }}</th>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; "> </th>
            <th colspan="2" style="background-color: #C0C0C0;">MIDDLE NAME</th>
            <td colspan="11" style="border: 1px solid #000000;"> {{ $personnel->middle_name ?? 'N/A' }}</td>
        </tr>

        <tr>
            <th rowspan="2" style="background-color: #C0C0C0; ">3.</th>
            <th rowspan="2" colspan="2" style="background-color: #C0C0C0;">DATE OF BIRTH <br> (mm/dd/yyyy)  </th>
            <td rowspan="2" colspan="3" style="border: 1px solid #000000;"> {{ $personnel->date_of_birth ?? 'N/A' }}</td>

            <th rowspan="2" colspan="3" style="background-color: #C0C0C0; ">16. CITIZENSHIP</th>
            <td colspan="5"> {{ $personnel->citizenship ?? 'N/A' }}</td>
        </tr>

        <tr>
        </tr>

        <tr>
            <th style="background-color: #C0C0C0; ">4.</th>
            <th colspan="2" style="background-color: #C0C0C0; ">PLACE OF BIRTH</th>
            <td colspan="3">{{ $personnel->place_of_birth ?? 'N/A' }}</td>

            <th colspan="3" style="background-color: #C0C0C0; ">If holder of  dual citizenship, </th>
            <th colspan="5">Pls. indicate country:</th>
        </tr>

        <tr>
            <th style="background-color: #C0C0C0; ">5.</th>
            <th colspan="2" style="background-color: #C0C0C0; ">SEX</th>
            <td colspan="3">{{ $personnel->sex ?? 'N/A' }}</td>

            <th colspan="3" style="background-color: #C0C0C0; ">please indicate the details.</th>
            <th colspan="5" style="background-color: #C0C0C0; "></th>
        </tr>

        <tr>
            <th rowspan="5" style="background-color: #C0C0C0; ">6.</th>
            <th rowspan="5" colspan="2" style="align-items:flex-start; background-color: #C0C0C0; ">CIVIL STATUS</th>
            <td rowspan="5" colspan="3">{{ $personnel->civil_status ?? 'N/A' }}</td>

            <th rowspan="5" colspan="2" style="align-items:flex-start;background-color: #C0C0C0; ">17. RESIDENTIAL ADDRESS</th>
            <td colspan="3" style="text-align: center">{{ $personnel->residentialAddress->house_no ?? 'N/A' }}</td>
            <td colspan="3" style="text-align: center">{{ $personnel->residentialAddress->street ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic;text-align: center">House/Block/Lot No.</td>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic; text-align: center">Street</td>
        </tr>
        <tr>
            <td rowspan="2" colspan="3" style="text-align: center">{{ $personnel->residentialAddress->subdivision ?? 'N/A' }}</td>
            <td rowspan="2" colspan="3" style="text-align: center">{{ $personnel->residentialAddress->barangay ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic;text-align: center">Subdivision/Village</td>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic; text-align: center">Barangay</td>
        </tr>

        <tr>
            <th rowspan="2" style="background-color: #C0C0C0; ">7.</th>
            <th rowspan="2" colspan="2" style="background-color: #C0C0C0; ">HEIGHT (m)</th>
            <td rowspan="2" colspan="3">{{ $personnel->height ?? 'N/A' }}</td>

            <th rowspan="2" colspan="2" style="background-color: #C0C0C0; "></th>
            <td colspan="3" style="text-align: center">{{ $personnel->residentialAddress->city ?? 'N/A' }}</td>
            <td colspan="3" style="text-align: center">{{ $personnel->residentialAddress->province ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic; text-align: center">City/Municipality</td>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic; text-align: center">Province</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; ">8.</th>
            <th colspan="2" style="background-color: #C0C0C0; ">WEIGHT (kg)</th>
            <td colspan="3">{{ $personnel->weight ?? 'N/A' }}</td>

            <th colspan="2">ZIP CODE</th>
            <td colspan="6">{{ $personnel->residentialAddress->zip_code ?? 'N/A' }}</td>
        </tr>

        <tr>
            <th rowspan="2" style="background-color: #C0C0C0; ">9.</th>
            <th rowspan="2" colspan="2" style="background-color: #C0C0C0;">BLOOD TYPE</th>
            <td rowspan="2" colspan="3">{{ $personnel->blood_type ?? 'N/A' }}</td>

            <th rowspan="2" colspan="2" style="align-items:flex-start;background-color: #C0C0C0; ">18. PERMANENT ADDRESS</th>
            <td colspan="3" style="text-align: center">{{ $personnel->permanentAddress->house_no  ?? 'N/A'}}</td>
            <td colspan="3" style="text-align: center">{{ $personnel->permanentAddress->street  ?? 'N/A'}}</td>
        </tr>
        <tr>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic;text-align: center">House/Block/Lot No.</td>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic; text-align: center">Street</td>
        </tr>

        <tr>
            <th rowspan="2" style="background-color: #C0C0C0; ">10.</th>
            <th rowspan="2" colspan="2" style="background-color: #C0C0C0; ">GSIS ID NO.</th>
            <td rowspan="2" colspan="3">{{ $personnel->gsis_num ?? 'N/A' }}</td>

            <th rowspan="2" colspan="2" style="align-items:flex-start;background-color: #C0C0C0; "></th>
            <td colspan="3" style="text-align: center">{{ $personnel->permanentAddress->subdivision ?? 'N/A' }}</td>
            <td colspan="3" style="text-align: center">{{ $personnel->permanentAddress->street ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic;text-align: center">Subdivision/Village</td>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic; text-align: center">Barangay</td>
        </tr>

        <tr>
            <th rowspan="2" style="background-color: #C0C0C0; ">11.</th>
            <th rowspan="2" colspan="2" style="background-color: #C0C0C0; ">PAG-IBIG ID NO.</th>
            <td rowspan="2" colspan="3">{{ $personnel->pagibig_num ?? 'N/A' }}</td>

            <th rowspan="2" colspan="2" style="align-items:flex-start;background-color: #C0C0C0; "></th>
            <td colspan="3" style="text-align: center">{{ $personnel->permanentAddress->city ?? 'N/A' }}</td>
            <td colspan="3" style="text-align: center">{{ $personnel->permanentAddress->province ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic;text-align: center">City/Municipality</td>
            <td colspan="3" style="font-family: 'Arial Narrow'; font-size: 8px; font-style: italic; text-align: center">Province</td>
        </tr>

        <tr>
            <th tyle="background-color: #C0C0C0; ">12.</th>
            <th colspan="2" style="background-color: #C0C0C0; ">PHILHEALTH NO.</th>
            <td colspan="3">{{ $personnel->philhealth_num ?? 'N/A' }}</td>

            <th colspan="2">ZIP CODE</th>
            <td colspan="6">{{ $personnel->residentialAddress->zip_code ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; ">13.</th>
            <th colspan="2" style="background-color: #C0C0C0; ">SSS NO.</th>
            <td colspan="3">{{ $personnel->sss_num ?? 'N/A' }}</td>

            <th colspan="2" style="background-color: #C0C0C0; ">19. TELEPHONE NO.</th>
            <td colspan="6">{{ $personnel->tel_no ?? 'N/A' }}</td>
        </tr>

        <tr>
            <th style="background-color: #C0C0C0; ">14.</th>
            <th colspan="2" style="background-color: #C0C0C0; ">TIN NO.</th>
            <td colspan="3">{{ $personnel->tin ?? 'N/A' }}</td>

            <th colspan="2" style="background-color: #C0C0C0; ">20. MOBILE NO.</th>
            <td colspan="6">{{ $personnel->mobile_no ?? 'N/A' }}</td>
        </tr>

        <tr>
            <th style="background-color: #C0C0C0; ">15.</th>
            <th colspan="2" style="background-color: #C0C0C0; ">AGENCY EMPLOYEE NO.</th>
            <td colspan="3">{{ $personnel->personnel_id ?? 'N/A' }}</td>

            <th colspan="2" style="background-color: #C0C0C0; ">21. E-MAIL ADDRESS (if any)</th>
            <td colspan="6">{{ $personnel->email ?? 'N/A' }}</td>
        </tr>

        {{-- FAMILY BACKGROUND --}}
        <tr>
            <th colspan="14" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic;border: 2px solid #000000;">II.  FAMILY BACKGROUND</th>
        </tr>
        {{-- SPOUSE --}}
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;">22.</th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">SPOUSE'S SURNAME</th>
            <td colspan="5">{{ $personnel->spouse->last_name ?? 'N/A' }}</td>

            <th colspan="4" style="background-color: #C0C0C0; ">23. NAME of CHILDREN  (Write full name and list all)</th>
            <th colspan="2" style="background-color: #C0C0C0; ">DATE OF BIRTH (mm/dd/yyyy) </th>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">FIRST NAME</th>
            <td colspan="3" style="border: 1px solid #000000;">{{ $personnel->spouse->first_name ?? 'N/A' }}</td>

            <th colspan="2" style="background-color: #C0C0C0; border: 1px solid #000000;">NAME EXTENSION (JR., SR) <br> {{ $personnel->spouse->name_ext ?? 'N/A' }}</th>
            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">MIDDLE NAME</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->spouse->middle_name ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">OCCUPATION</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->spouse->occupation ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">EMPLOYER/BUSINESS NAME</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->spouse->employer_business_name ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">BUSINESS ADDRESS</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->spouse->business_address ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">TELEPHONE NO.</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->spouse->tel_no ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>


        {{-- FATHER --}}
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;">24.</th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">FATHER'S SURNAME</th>
            <td colspan="5">{{ $personnel->father->last_name ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">FIRST NAME</th>
            <td colspan="3" style="border: 1px solid #000000;">{{ $personnel->father->first_name ?? 'N/A' }}</td>

            <th colspan="2" style="background-color: #C0C0C0; border: 1px solid #000000;">NAME EXTENSION (JR., SR) <br> {{ $personnel->father->name_ext ?? 'N/A' }}</th>
            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">MIDDLE NAME</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->father->middle_name ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>

        {{-- MOTHER --}}
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;">25.</th>
            <th colspan="7" style="background-color: #C0C0C0; border-right: 1px solid #000000;">MOTHER'S MAIDEN NAME</th>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">SURNAME</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->mother->last_name ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">FIRST NAME</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->mother->first_name ?? 'N/A' }}</td>

            <td colspan="4" style="border: 1px solid #000000;">kids</td>
            <td colspan="2" style="border: 1px solid #000000;">kids</td>
        </tr>
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">MIDDLE NAME</th>
            <td colspan="5" style="border: 1px solid #000000;">{{ $personnel->mother->middle_name ?? 'N/A' }}</td>

            <td colspan="6" style="border: 1px solid #000000; color:red; font-style: italic; font-weight:500;">(Continue on separate sheet if necessary)</td>\
        </tr>


        {{--  EDUCATIONAL BACKGROUND --}}
        <tr>
            <th colspan="14" style="background-color: #969696; color: #ffffff; font-weight:500; font-style:italic;border: 2px solid #000000;">III.   EDUCATIONAL BACKGROUND</th>
        </tr>

        <tr>
            <th rowspan="3" style="background-color: #C0C0C0; border-left: 1px solid #000000;">26</th>
            <th rowspan="3" colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">LEVEL</th>
            <th rowspan="3" colspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">NAME OF SCHOOL <br>(Write in full)</th>
            <th rowspan="3" colspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">BASIC EDUCATION/DEGREE/COURSE<br>(Write in full)</th>
            <th rowspan="2" colspan="2" style="background-color: #C0C0C0; border: 1px solid #000000;">PERIOD OF ATTENDANCE</th>
            <th rowspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">HIGHEST LEVEL/UNITS EARNED <br>(if not graduated)</th>
            <th rowspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">YEAR GRADUATED</th>
            <th rowspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</th>
        </tr>
        <tr><td> </td><td> </td></tr>
        <tr>
            <th rowspan="1" colspan="1" style="background-color: #C0C0C0; border: 1px solid #000000;">From</th>
            <th rowspan="1" colspan="1" style="background-color: #C0C0C0; border: 1px solid #000000;">To</th>
        </tr>

        {{-- ELEMENTARY --}}
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">ELEMENTARY</th>
            <td colspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">
                {{ $personnel->elementaryEducation->school_name ?? 'N/A' }}
            </td>
            <td colspan="3" style="border: 1px solid #000000;">
                {{ $personnel->elementaryEducation->degree_course ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->elementaryEducation->period_from ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->elementaryEducation->period_to ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->elementaryEducation->highest_level_units ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->elementaryEducation->year_graduated ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->elementaryEducation->scholarship_honors ?? 'N/A' }}
            </td>
        </tr>

        {{-- SECONDARY --}}
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">SECONDARY</th>
            <td colspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">
                {{ $personnel->secondaryEducation->school_name ?? 'N/A' }}
            </td>
            <td colspan="3" style="border: 1px solid #000000;">
                {{ $personnel->secondaryEducation->degree_course ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->secondaryEducation->period_from ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->secondaryEducation->period_to ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->secondaryEducation->highest_level_units ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->secondaryEducation->year_graduated ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->secondaryEducation->scholarship_honors ?? 'N/A' }}
            </td>
        </tr>

        {{-- VOCATIONAL/TRADE COURSE --}}
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">VOCATIONAL/ <br>TRADE COURSE</th>
            <td colspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">
                {{ $personnel->vocationalEducation->school_name ?? 'N/A' }}
            </td>
            <td colspan="3" style="border: 1px solid #000000;">
                {{ $personnel->vocationalEducation->degree_course ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->vocationalEducation->period_from ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->vocationalEducation->period_to ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->vocationalEducation->highest_level_units ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->vocationalEducation->year_graduated ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->vocationalEducation->scholarship_honors ?? 'N/A' }}
            </td>
        </tr>

        {{-- COLLEGE --}}
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">COLLEGE</th>
            <td colspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">
                {{ $personnel->graduateEducation->school_name ?? 'N/A' }}
            </td>
            <td colspan="3" style="border: 1px solid #000000;">
                {{ $personnel->graduateEducation->degree_course ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateEducation->period_from ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateEducation->period_to ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateEducation->highest_level_units ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateEducation->year_graduated ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateEducation->scholarship_honors ?? 'N/A' }}
            </td>
        </tr>

        {{-- GRADUATE STUDIES  --}}
        <tr>
            <th style="background-color: #C0C0C0; border-left: 1px solid #000000;"></th>
            <th colspan="2" style="background-color: #C0C0C0; border-right: 1px solid #000000;">GRADUATE STUDIES </th>
            <td colspan="3" style="background-color: #C0C0C0; border: 1px solid #000000;">
                {{ $personnel->graduateStudiesEducation->school_name ?? 'N/A' }}
            </td>
            <td colspan="3" style="border: 1px solid #000000;">
                {{ $personnel->graduateStudiesEducation->degree_course ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateStudiesEducation->period_from ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateStudiesEducation->period_to ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateStudiesEducation->highest_level_units ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateStudiesEducation->year_graduated ?? 'N/A' }}
            </td>
            <td style="border: 1px solid #000000;">
                {{ $personnel->graduateStudiesEducation->scholarship_honors ?? 'N/A' }}
            </td>
        </tr>
        <tr>
            <th colspan="14" style="background-color: #C0C0C0; color: #red; font-weight:500; font-style:italic;border: 2px solid #000000;">(Continue on separate sheet if necessary)</th>
        </tr>

        {{-- FOOTER --}}
        <tr>
            <th colspan="3" style="background-color: #C0C0C0; border: 2px solid #000000; font-weight:700">
                SIGNATURE
            </th>
            <th colspan="6" style=" border: 2px solid #000000; font-weight:700">
            </th>
            <th colspan="2" style="background-color: #C0C0C0; border: 2px solid #000000; font-weight:700">
                DATE
            </th>
            <th colspan="3" style="border: 2px solid #000000; font-weight:700">
            </th>
        </tr>
        <tr>
            <td colspan="14" style="border: 1px solid #000000; font-weight:700; font-family: Arial, font-size: 10; font-style: italic; text-align: right">
                CS FORM 212 (Revised 2017), Page 1 of 4
            </td>
        </tr>
    </table>
</html>
