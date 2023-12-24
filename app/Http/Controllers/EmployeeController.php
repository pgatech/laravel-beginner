<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {

        $data = Employee::all();
        return view('employee.index',compact('data'));
    }
}
