<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('dashboard/student',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move(public_path('img'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.jpg';
        }


        $students = new Student;
        $students->name =$request->get ('name');
        $students->regno =$request->get ('regno'); 
        $students->class =$request->get ('class'); 
        $students->dob =$request->get ('dob'); 
        $students->gender =$request->get ('gender');
        $students->image = $fileNameToStore;

        $students->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('dashboard/actions/edit_student',compact('student'));
        
        return redirect('student');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $student = Student::find($id);
        $student->update([
            'name'=>$request->name,
            'regno'=>$request->regno,
            'class'=>$request->class,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'image'=>$request->image,
        ]);

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        file::delete('img/'.$student->image);
        $student->delete();

        return redirect('student');
    }
}
