@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Behavior Observations</h5>
                <a href="{{ route('observations.create') }}" class="btn btn-primary btn-sm">Record New Observation</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Student</th>
                                <th>Counselor</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($observations as $observation)
                            <tr>
                                <td>{{ $observation->observation_date->format('d M Y H:i') }}</td>
                                <td>{{ $observation->student->name }}</td>
                                <td>{{ $observation->counselor->name }}</td>
                                <td>
                                    <span class="badge {{ $observation->behavior_type == 'Positive' ? 'bg-success' : ($observation->behavior_type == 'Negative' ? 'bg-danger' : 'bg-info') }}">
                                        {{ $observation->behavior_type }}
                                    </span>
                                </td>
                                <td>{{ $observation->location }}</td>
                                <td>
                                    <form action="{{ route('observations.destroy', $observation->id) }}" method="POST">
                                        <a href="{{ route('observations.edit', $observation->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No observations found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $observations->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
