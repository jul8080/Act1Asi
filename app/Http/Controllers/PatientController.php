<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::latest()->paginate(5);
        return view('patients.index', compact('patients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required',
            'MiddleName' => 'required',
            'LastName' => 'required',
            'Sex' => 'required',
            'BirthDate' => 'required',
            'Address' => 'required',
            'ContactNumber' => 'required',
        ]);
        Patient::create($request->all());
        return redirect()->route('patients.index')
            ->with('success', 'Patient record is added successfully!');
    }

    public function show(Patient $patient)
    {

        return view('patients.show', compact('patient'));
    }


    public function edit(Patient $patient)
    {

        return view('patients.edit', compact('patient'));
    }


    public function update(Request $request, Patient $patient)
    {
        $request->validate([]);

        $patient->update($request->all());
        return redirect()->route('patients.index')
            ->with('success', 'Patient record successfully updated');
    }


    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')
            ->with('success', 'Patient record deleted');
    }

}
