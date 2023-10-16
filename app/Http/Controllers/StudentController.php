<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // show all students
    public function index() {
        return view("students.index", [
            "students" => Student::all()
        ]);
    }

    // show student students
    public function show(Student $student) {
        $course = $student->lessions()->join("courses", "lessions.course_id", "=", "courses.id")->get();
        $stu = $student->lessions()->join("students", "lessions.student_id", "=", "students.id")->get();
        // dd($course);
        return view("students.show", [
            "student" => $student,
            "courses" => $course
        ]);
    }

    // show create form
    public function create() {
        return view("students.create");
    }
    // store form data
    public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            "firstName" => "required",
            "lastName" => "required",
            "otherName" => "required",
            "regNumber" => "required",
            "level" => "required",
        ]);

        Student::create($formFields);

        return redirect("/students")->with("message", "Student created successfully!");
    }

    // show edit form
    public function edit(Student $student) {
        return view("students.edit", ["student" => $student]);
    }

     // update form data
     public function update(Request $request, Student $student) {
        // dd($request);
        $formFields = $request->validate([
            "firstName" => "required",
            "lastName" => "required",
            "otherName" => "required",
            "regNumber" => "required",
            "level" => "required",
        ]);

        $student->update($formFields);

        return redirect("/students/manage")->with("message", "Student Updated Successfully!");
    }

    // destroy student data 
    public function destroy(Student $student) {
        if(auth()->user()->role != "admin"){
            abort(403, "Unauthorized Action");
        }

        $student->delete();

        return redirect("/students")->with("message", "Student Deleted Successfully!");
    }

    public function manage(Student $student) {

        return view("students.manage", [
            "students" => $student::latest()->filter(request(["search"]))->paginate(6)
        ]);
    }
}
