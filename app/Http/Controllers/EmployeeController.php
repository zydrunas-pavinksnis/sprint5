<?php

namespace App\Http\Controllers;

use App\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    

    public function index(){
        return view('employees.index', ['employees' => Employee::orderBy('name')->get()]);
        }
    
    public function create(){
        $projects = \App\Project::orderBy('name')->get();
        return view('employees.create', ['projects' => $projects]);
    }
    
    public function store(Request $request){
        $employee = new Employee();
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employee.index');
    }

    public function edit(Employee $employee){
        $projects = \App\Project::orderBy('name')->get();
        return view('employees.edit', ['employee' => $employee, 'projects' => $projects]);
    }

    public function update(Request $request, Employee $employee){
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employee.index');
    }

        public function destroy(Employee $employee){
        $employee->delete();
        return redirect()->route('employee.index');
        }
}
