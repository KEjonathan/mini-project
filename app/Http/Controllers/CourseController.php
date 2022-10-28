<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Unit;
use App\Models\User;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show(){
        return view('administrators.courses.edit')
        ->with('departments',Department::orderBy('updated_at','DESC')
        ->get());
    }
    public function reg(Request $request){
        $request->validate([
            'cname' => 'required',
            'department' => 'required'
        ]);

        Course::create([
            'cname' => $request->input('cname'),
            'department' => $request->input("department")
        ]);
        return back();
    }

    public function reg2(Request $request){
        $request->validate([
            'fname' => 'required',
            'dean' => 'required'
        ]);
        Faculty::create([
            'fname' => $request->input('fname'),
            'dean' => $request->input('dean'),
        ]);
        return back();
    }

    public function reg3(Request $request){
        $request->validate([
            'name' => 'required',
            'hod' => 'required',
            'faculty_id' => 'required'
        ]);
        Department::create([
            'name' => $request->input('name'),
            'hod' => $request->input('hod'),
            'faculty_id' => $request->input('faculty_id')
        ]);
        return back();
    }

    public function reg4(Request $request){
        $request->validate([
            'uname' => 'required',
            'ucode' => 'required',
            'uyear' => 'required',
            'sem' => 'required',
            'program' => 'required',
            'user_id' => 'required'
        ]);

        Unit::create([
            'uname' => $request->input('uname'),
            'ucode' => $request->input('ucode'),
            'uyear' => $request->input('uyear'),
            'sem' => $request->input('sem'),
            'program' => $request->input('program'),
            'user_id' => $request->input('user_id'),
        ]);
        return back();
    }

    public function form_d(){
        return view('students.select')->with('courses', Course::orderBy('updated_at')->get());    
    }
    public function getform(Request $request){
        $request->validate(['form_type' => 'required']);
        $form = $request->input('form_type');
            return view('administrators.forms.create')->with('units',Unit::where('program', $form)->get()); 
            
    }

    public function feedback(Request $request){
        $request->validate([
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'unit_id' => 'required',
        ]);
        Form::create([
            'q1' => $request->input('q1'),
            'q2' => $request->input('q2'),
            'q3' => $request->input('q3'),
            'q4' => $request->input('q4'),
            'q5' => $request->input('q5'),
            'q6' => $request->input('q6'),
            'q7' => $request->input('q7'),
            'unit_id' => $request->input('unit_id')
        ]);
        return redirect(route('form-select'));
    }

}
