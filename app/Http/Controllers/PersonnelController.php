<?php

namespace App\Http\Controllers;

use App\Exports\PersonnelDataExport;
use App\Models\Personnel;
use App\Jobs\UpdateStepIncrement;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnels = Personnel::all();
        return view('personnel.index', compact('personnels'));
    }

    public function show($id)
    {
        $personnel = Personnel::findOrFail($id);
        return view('personnel.show', compact('personnel'));
    }

    public function create()
    {
        return view('personnel.create');
    }

    public function profile($personnel)
    {
        $personnel = Auth::user()->personnel->id;
        return view('personnel.show', compact('personnel'));
    }

    public function loyaltyAwards()
    {
        $recipients = Personnel::getLoyaltyAwardRecipients();
        return view('personnel.loyalty-awards', compact('recipients'));
    }

    public function export($id)
    {
        // dd("uu");
        $personnel = Personnel::findOrFail($id);

        $personnelData = [ 'personnels' => $personnel];
        $filename = $personnel->id . '.xlsx';

        return Excel::download(new PersonnelDataExport($personnelData, $personnel->id), $filename);
    }

    public function destroy($id)
    {
        try {
            $personnel = Personnel::findOrFail($id);


            $personnel->delete();

            session()->flash('flash.banner', 'Personnel Deleted Successfully');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Exception $e) {

            session()->flash('flash.banner', 'Failed To Delete Personnel.' . $e);
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('personnels.index');
    }
}
