<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function getEmployee()
    {
       return response()->json(Employee::all(),200);
    }

    public function getEmployeeById($id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message' => 'Not data found'],404);
        }

            return response()->json($employee::find($id),200);
    
    }

    public function AddNewEmployee(Request $request)
    {
        $employee = Employee::create($request->all());

        return response($employee,201);
    }

    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);
         if(is_null($employee)){
            return response()->json(['message' => 'Not data found'],404);
        }
        
        if($employee){

            $employee->update($request->all());
            return response($employee,201);
        }
    }

    public function DeleteEmployee($id)
    {
        $employee = Employee::find($id);
         if(is_null($employee)){
            return response()->json(['message' => 'Not data found'],404);
        }
        
        if($employee){

            $employee->delete();
            return response()->json(NULL,204);
        }

    }
}

