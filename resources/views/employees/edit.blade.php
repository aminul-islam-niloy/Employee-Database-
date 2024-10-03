@extends('layouts.app')

@section('content')
<div class="card mx-auto" style="max-width: 700px; padding: 20px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Edit Employee</h2>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
        </div>

        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" name="job_title" class="form-control" value="{{ $employee->job_title }}" required>
        </div>

        <div class="mb-3">
            <label for="joining_date" class="form-label">Joining Date</label>
            <input type="date" name="joining_date" class="form-control" value="{{ $employee->joining_date }}" required>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" step="0.01" name="salary" class="form-control" value="{{ $employee->salary }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $employee->email }}">
        </div>

        <div class="mb-3">
            <label for="mobile_no" class="form-label">Mobile No</label>
            <input type="text" name="mobile_no" class="form-control" value="{{ $employee->mobile_no }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" class="form-control" rows="3" required>{{ $employee->address }}</textarea>
        </div>

        <div class="btn-group d-flex mt-2 justify-content-fill">
       
       <button type="submit" class="btn btn-primary ">Update</button>
       <a href="{{ route('employees.index') }}" style="margin-left:10px" class="btn btn-secondary">Back to List</a>
     </div>
    </form>
</div>
@endsection
