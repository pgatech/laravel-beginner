<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::all();

        // Search Students
        $search = $request->input('search');
        $students = Student::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('nim', 'like', '%' . $search . '%')
                         ->orWhere('major', 'like', '%' . $search . '%');
        })->paginate(10); // Sesuaikan jumlah data per halaman

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required|unique:students',
            'major' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success','Data student berhasil ditambahkan.');

    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student){
        $request->validate ([
            'name' => 'required',
            'nim' => 'required|unique:students,nim,' . $student->id,
            'major' => 'required',
        ]);
        
        $student->update($request->all());
        return redirect()->route('students.index')->with('success','Data student berhasil diperbaharui.');
    }

    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('students.index')->with('success','Data student berhasil dihapus');
    }

}
