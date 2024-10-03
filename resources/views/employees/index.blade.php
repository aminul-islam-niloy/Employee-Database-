@extends('layouts.app')

@section('content')
    <div class=" align-items-center mt-2 mb-4">
        <h2>Employees</h2>
    </div>

    <!-- Search Box -->
    <form action="{{ route('employees.index') }}" method="GET" class="mb-4" class="justify-content-right" style="margin-left:200px; max-width: 900px; padding: 10px;" >
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by Name or Job Title" value="{{ request('search') }}">
            <button type="submit" style="margin-left:10px" class="btn btn-info">Search</button>
            <a style="margin-left:20px" href="{{ route('employees.create') }}" class="btn btn-warning">Add New Employee</a>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Job Title</th>
                    <th>Joining Date</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($employees->count())
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->job_title }}</td>
                            <td>{{ $employee->joining_date }}</td>
                            <td>{{ $employee->mobile_no }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">No employees found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $employees->links() }}
    </div>
@endsection
