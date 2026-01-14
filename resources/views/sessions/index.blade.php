@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Counseling Sessions</h5>
                <a href="{{ route('sessions.create') }}" class="btn btn-primary btn-sm">Schedule New Session</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Student</th>
                                <th>Counselor</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($sessions as $session)
                            <tr>
                                <td>{{ $session->session_date->format('d M Y H:i') }}</td>
                                <td>{{ $session->student->name }}</td>
                                <td>{{ $session->counselor->name }}</td>
                                <td>{{ $session->category->name }}</td>
                                <td>
                                    <span class="badge {{ $session->status == 'Completed' ? 'bg-success' : ($session->status == 'Cancelled' ? 'bg-danger' : 'bg-primary') }}">
                                        {{ $session->status }}
                                    </span>
                                </td>
                                <td>
                                    <form action="{{ route('sessions.destroy', $session->id) }}" method="POST">
                                        <a href="{{ route('sessions.edit', $session->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No sessions found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $sessions->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
