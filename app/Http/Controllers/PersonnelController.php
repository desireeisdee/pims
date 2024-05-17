<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Jobs\UpdateStepIncrement;
use Illuminate\Http\Request;
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
        return view('personnel_profile.show', compact('personnel'));
    }
    // public function profile($id)
    // {
    //     $personnel = Personnel::findOrFail($id);
    //     return view('personnel_profile.show', compact('personnel'));
    // }

    public function create()
    {
        return view('personnel.create');
    }

    // public function edit($id)
    // {
    //     $personnel = Personnel::findOrFail($id);
    //     return view('personnel.edit', ['personnel' => $personnel]);
    // }


    // public function update(Request $request, $id)
    // {
    //     try {
    //         $request->validate([
    //             'first_name' => 'required',
    //             'mid_initial' => 'required',
    //             'last_name' => 'required',
    //             'sex' => 'required',
    //             'email' => 'required',
    //             'phone' => 'required|max:12',
    //             'address' => 'required',
    //             'is_admin' => 'required'
    //         ]);

    //         $personnel = Personnel::findOrFail($id);
    //         $personnel->update($request->all());

    //         $logController = new LogController();
    //         $logController->store("Personnel Update", "success", "updated", $id);

    //         session()->flash('flash.banner', 'Personnel Data Updated Successfully');
    //         session()->flash('flash.bannerStyle', 'success');

    //     } catch (ValidationException $e) { // Validation failed
    //         $errorMessage = 'The following errors occurred while validating the personnel data:<br>';
    //         foreach ($e->validator->errors()->all() as $error) {
    //             $errorMessage .= "- $error<br>";
    //         }

    //         session()->flash('flash.banner', $errorMessage);
    //         session()->flash('flash.bannerStyle', 'danger');

    //     } catch (ModelNotFoundException $e) { // Personnel not found
    //         $logController = new LogController();
    //         $logController->store("Personnel Update", "failed", "updated", $id);

    //         session()->flash('flash.banner', 'Personnel Not Found.');
    //         session()->flash('flash.bannerStyle', 'danger');
    //     }
    //     return redirect()->back();
    // }
    // public function updateStepIncrement()
    // {
    //     // Dispatch the job
    //     UpdateStepIncrement::dispatch();

    //     return response()->json(['message' => 'Step increment job dispatched successfully.']);
    // }
}
