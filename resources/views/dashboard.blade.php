@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-md-12">
        <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">School Counselors App</h1>
                <p class="col-md-8 fs-4">Manage student counseling sessions effectively and track student progress with ease.</p>
                <a href="{{ route('sessions.create') }}" class="btn btn-primary btn-lg">Schedule a Session</a>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="card text-center h-100">
            <div class="card-body">
                <div class="display-4 text-primary mb-2">
                    <i class="bi bi-people"></i>
                </div>
                <h5 class="card-title">Students</h5>
                <p class="card-text">Manage student records and information.</p>
                <a href="{{ route('students.index') }}" class="btn btn-outline-primary">View Students</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center h-100">
            <div class="card-body">
                <div class="display-4 text-success mb-2">
                    <i class="bi bi-person-badge"></i>
                </div>
                <h5 class="card-title">Counselors</h5>
                <p class="card-text">Manage counselor profiles and specialties.</p>
                <a href="{{ route('counselors.index') }}" class="btn btn-outline-success">View Counselors</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center h-100">
            <div class="card-body">
                <div class="display-4 text-warning mb-2">
                    <i class="bi bi-tags"></i>
                </div>
                <h5 class="card-title">Categories</h5>
                <p class="card-text">Define types of counseling sessions.</p>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-warning">View Categories</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center h-100">
            <div class="card-body">
                <div class="display-4 text-info mb-2">
                    <i class="bi bi-calendar-check"></i>
                </div>
                <h5 class="card-title">Sessions</h5>
                <p class="card-text">Track and manage counseling sessions.</p>
                <a href="{{ route('sessions.index') }}" class="btn btn-outline-info">View Sessions</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center h-100">
            <div class="card-body">
                <div class="display-4 text-danger mb-2">
                    <i class="bi bi-eye"></i>
                </div>
                <h5 class="card-title">Observations</h5>
                <p class="card-text">Record and monitor student behavior.</p>
                <a href="{{ route('observations.index') }}" class="btn btn-outline-danger">View Observations</a>
            </div>
        </div>
    </div>
</div>
@endsection
