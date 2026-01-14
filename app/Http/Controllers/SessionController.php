<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Student;
use App\Models\Counselor;
use App\Models\Category;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::with(['student', 'counselor', 'category'])->latest()->paginate(10);
        return view('sessions.index', compact('sessions'));
    }

    public function create()
    {
        $students = Student::all();
        $counselors = Counselor::all();
        $categories = Category::all();
        return view('sessions.create', compact('students', 'counselors', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'counselor_id' => 'required',
            'category_id' => 'required',
            'session_date' => 'required|date',
        ]);

        Session::create($request->all());

        return redirect()->route('sessions.index')->with('success', 'Session scheduled successfully.');
    }

    public function edit(Session $session)
    {
        $students = Student::all();
        $counselors = Counselor::all();
        $categories = Category::all();
        return view('sessions.edit', compact('session', 'students', 'counselors', 'categories'));
    }

    public function update(Request $request, Session $session)
    {
        $request->validate([
            'student_id' => 'required',
            'counselor_id' => 'required',
            'category_id' => 'required',
            'session_date' => 'required|date',
        ]);

        $session->update($request->all());

        return redirect()->route('sessions.index')->with('success', 'Session updated successfully.');
    }

    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('sessions.index')->with('success', 'Session deleted successfully.');
    }
}
