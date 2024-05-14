<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnels = Personnel::all();
        return view('admin.personnel.index', compact('personnels'));
    }

    public function show()
    {
        return view('personnel_profile.show');
    }

    public function edit($id)
    {
        $personnel = Personnel::findOrFail($id);
        return view('admin.personnel.edit', ['personnel' => $personnel]);
    }


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

}
