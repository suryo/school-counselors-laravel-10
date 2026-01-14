<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counselor;

class CounselorController extends Controller
{
    public function index()
    {
        $counselors = Counselor::latest()->paginate(10);
        return view('counselors.index', compact('counselors'));
    }

    public function create()
    {
        return view('counselors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:counselors',
        ]);

        Counselor::create($request->all());

        return redirect()->route('counselors.index')->with('success', 'Counselor created successfully.');
    }

    public function edit(Counselor $counselor)
    {
        return view('counselors.edit', compact('counselor'));
    }

    public function update(Request $request, Counselor $counselor)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:counselors,email,' . $counselor->id,
        ]);

        $counselor->update($request->all());

        return redirect()->route('counselors.index')->with('success', 'Counselor updated successfully.');
    }

    public function destroy(Counselor $counselor)
    {
        $counselor->delete();
        return redirect()->route('counselors.index')->with('success', 'Counselor deleted successfully.');
    }
}
