<?php

namespace App\Http\Controllers;
use App\Models\employee;

use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
       
        $employees = Employee::where('name', 'like', "%{$search}%")
            ->orWhere('job_title', 'like', "%{$search}%")
            ->paginate(10); 
    
        return view('employees.index', compact('employees', 'search'));
    }
    
    // Show form to create a new employee
    public function create()
    {
        return view('employees.create');
    }

    // Store a new employee
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job_title' => 'required|string|max:100',
            'joining_date' => 'required|date',
            'salary' => 'required|numeric',
            'email' => 'nullable|string|email|max:255',
            'mobile_no' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    // Show form to edit an employee
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Update an existing employee
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job_title' => 'required|string|max:100',
            'joining_date' => 'required|date',
            'salary' => 'required|numeric',
            'email' => 'nullable|string|email|max:255',
            'mobile_no' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

   
    public function destroy($id)
{
    $employee = Employee::findOrFail($id);
    $employee->delete();

    return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
}

}
