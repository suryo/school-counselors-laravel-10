@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Record Behavior Observation</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('observations.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="observation_date" class="form-label">Observation Date & Time</label>
                        <input type="datetime-local" class="form-control @error('observation_date') is-invalid @enderror" id="observation_date" name="observation_date" value="{{ old('observation_date') }}" required>
                        @error('observation_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="student_id" class="form-label">Student</label>
                        <select class="form-select @error('student_id') is-invalid @enderror" id="student_id" name="student_id" required>
                            <option value="">Select Student</option>
                            @foreach($students as $student)
                                <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>{{ $student->name }} ({{ $student->student_id }})</option>
                            @endforeach
                        </select>
                        @error('student_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="counselor_id" class="form-label">Observer (Counselor)</label>
                        <select class="form-select @error('counselor_id') is-invalid @enderror" id="counselor_id" name="counselor_id" required>
                            <option value="">Select Counselor</option>
                            @foreach($counselors as $counselor)
                                <option value="{{ $counselor->id }}" {{ old('counselor_id') == $counselor->id ? 'selected' : '' }}>{{ $counselor->name }}</option>
                            @endforeach
                        </select>
                        @error('counselor_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="behavior_type" class="form-label">Behavior Type</label>
                        <select class="form-select @error('behavior_type') is-invalid @enderror" id="behavior_type" name="behavior_type" required>
                            <option value="Positive" {{ old('behavior_type') == 'Positive' ? 'selected' : '' }}>Positive</option>
                            <option value="Negative" {{ old('behavior_type') == 'Negative' ? 'selected' : '' }}>Negative</option>
                            <option value="Neutral" {{ old('behavior_type') == 'Neutral' ? 'selected' : '' }}>Neutral</option>
                        </select>
                        @error('behavior_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" placeholder="e.g., Classroom, Playground">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description of Behavior</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="action_taken" class="form-label">Action Taken</label>
                        <textarea class="form-control" id="action_taken" name="action_taken" rows="3">{{ old('action_taken') }}</textarea>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('observations.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Observation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
