<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BehaviorObservation;
use App\Models\Student;
use App\Models\Counselor;

class BehaviorObservationController extends Controller
{
    public function index()
    {
        $observations = BehaviorObservation::with(['student', 'counselor'])->latest()->paginate(10);
        return view('observations.index', compact('observations'));
    }

    public function create()
    {
        $students = Student::all();
        $counselors = Counselor::all();
        return view('observations.create', compact('students', 'counselors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'counselor_id' => 'required',
            'observation_date' => 'required|date',
            'behavior_type' => 'required',
            'description' => 'required',
        ]);

        BehaviorObservation::create($request->all());

        return redirect()->route('observations.index')->with('success', 'Observation recorded successfully.');
    }

    public function edit(BehaviorObservation $observation)
    {
        $students = Student::all();
        $counselors = Counselor::all();
        return view('observations.edit', compact('observation', 'students', 'counselors'));
    }

    public function update(Request $request, BehaviorObservation $observation)
    {
        $request->validate([
            'student_id' => 'required',
            'counselor_id' => 'required',
            'observation_date' => 'required|date',
            'behavior_type' => 'required',
            'description' => 'required',
        ]);

        $observation->update($request->all());

        return redirect()->route('observations.index')->with('success', 'Observation updated successfully.');
    }

    public function destroy(BehaviorObservation $observation)
    {
        $observation->delete();
        return redirect()->route('observations.index')->with('success', 'Observation deleted successfully.');
    }
}
