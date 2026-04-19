<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Career;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('career')->get();
        return view('students.index', compact('students'));
    }
    public function create()
    {
        $careers = Career::all();
        return view('students.create', compact('careers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'    => 'required|string|max:255',
            'apellido'  => 'required|string|max:255',
            'email'     => 'required|email|unique:students,email',
            'matricula' => 'required|unique:students,matricula',
            'semestre'  => 'required|integer|min:1|max:12',
            'career_id' => 'required|exists:careers,id',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Estudiante registrado con éxito.');
    }
    public function edit(Student $student)
    {
        $careers = Career::all();
        return view('students.edit', compact('student', 'careers'));
    }
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'nombre'    => 'required|string|max:255',
            'apellido'  => 'required|string|max:255',
            'email'     => 'required|email|unique:students,email,' . $student->id,
            'matricula' => 'required|unique:students,matricula,' . $student->id,
            'semestre'  => 'required|integer|min:1|max:12',
            'career_id' => 'required|exists:careers,id',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Información actualizada.');
    }
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Estudiante eliminado correctamente.');
    }
}