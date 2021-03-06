<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('id', 'DESC')->get();
        return view('ajax.employees', compact('employees'));
    }

    public function addEmployee(Request $request)
    {
        $employee = new Employee();
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return response()->json($employee);
    }

    public function getEmployeeById($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    public function updateEmployee(Request $request)
    {
        $employee = Employee::find($request->id);
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return response()->json($employee);
    }

    public function deleteEmployee($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json(['success' => 'Record has been deleted']);
    }

    public function deleteCheckedEmployee(Request $request)
    {
        $ide = $request->ide;
        Employee::whereIn('id', $ide)->delete();
        return response()->json(['success' => 'Employee have been deleted!']);
    }
}
