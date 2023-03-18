<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('mahasiswa.index', compact('students'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'address' => $request->address,
            'email' => $request->email,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth
        ]);

        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('mahasiswa.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'address' => $request->address,
            'email' => $request->email,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth
        ]);

        return redirect()->route('student.index');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('student.index');
    }
}
