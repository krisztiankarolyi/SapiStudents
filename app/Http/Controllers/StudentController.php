<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {;
        return view('students.index');
    }

    public function  getStudents(){
        $students = Student::all();
        return view('students.students', ['students'=> $students]);
    }

    public function  getStudent($id){
        $student = Student::find($id);
        $students = array();

        if($student){
            array_push($students, $student);
            return view('students.students', ['students'=> $students]);
        }
        else
            return "<p>Nincs találat</p>";
    }

    public function newStudent(Request $request){
        return view('students.newStudent');
    }

    public function addStudent(Request $request){
                $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'grade' => 'required'
                ]);

                $stud = Student::create([
                    'name'  => $request->input('name'),
                    'grade' => $request->input('grade'),
                    'email' => $request->input('email'),
                ]);
                echo "<p style='color: green'>$request->name sikeresen hozzáadva</p>";
                return view("students.newStudent");

        echo "<p style='color: red'>Hiba történt</p>";
        return view("students.newStudent");
    }

    public function destroy(Student $student)
    {
        $stud = Student::find($student);

        $student->delete();
        return redirect()->route('getStudents')
            ->with('status', 'Student deleted successfully');
    }


    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'grade' => 'required'
        ]);

        if ($student->update($request->all())) {
            return redirect()->route('getStudents')
               ->with('status', 'Student updated successfully');

        }
        else {
            return redirect()->route('getStudents')
                ->with('status', 'Update failed');
        }

    }




}
