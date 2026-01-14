@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Counselors List</h5>
                <a href="{{ route('counselors.create') }}" class="btn btn-primary btn-sm">Add New Counselor</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Specialization</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($counselors as $counselor)
                            <tr>
                                <td>{{ $counselor->name }}</td>
                                <td>{{ $counselor->email }}</td>
                                <td>{{ $counselor->phone }}</td>
                                <td>{{ $counselor->specialization }}</td>
                                <td>
                                    <form action="{{ route('counselors.destroy', $counselor->id) }}" method="POST">
                                        <a href="{{ route('counselors.edit', $counselor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No counselors found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $counselors->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
