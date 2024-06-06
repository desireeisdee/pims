<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::all();
        return view('district.index', compact('districts'));
    }


    public function store(Request $request)
    {
        try {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

            District::create($request->all());
            session()->flash('flash.banner', 'District Created Successfully');
            session()->flash('flash.bannerStyle', 'success');
        } catch (ValidationException $e) {
            session()->flash('flash.banner', 'Failed to create District');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);
                $district = District::findOrFail($id);
                $district->update($request->all());

                session()->flash('flash.banner', "District successfully updated");
                session()->flash('flash.bannerStyle', 'success');

        } catch (ValidationException $e) {
            session()->flash('flash.banner', 'Failed to save District. Ensure all inputs are properly filled.');
            session()->flash('flash.bannerStyle', 'danger');

        } catch (ModelNotFoundException $e) {
            session()->flash('flash.banner', 'District Not Found.');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->back();
    }

}
