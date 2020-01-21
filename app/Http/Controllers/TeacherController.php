<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use File;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('dashboard/teacher',compact('teachers'));
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


        $teachers =new Teacher;
        $teachers->name=$request->get('name');
        $teachers->email=$request->get('email'); 
        $teachers->phone=$request->get('phone'); 
        $teachers->id_no=$request->get('id_no'); 
        $teachers->location=$request->get('location'); 
        $teachers->tsc_no=$request->get('tsc_no'); 
        $teachers->gender=$request->get('gender');
        $teachers->image = $fileNameToStore;
        
        $teachers->save();
        return redirect()->back();   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('dashboard/actions/edit_teacher',compact('teacher'));

        return redirect('teacher');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $teacher = Teacher::find($id);
        $teacher->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_no'=>$request->id_no,
            'location'=>$request->location,
            'tsc_no'=>$request->tsc_no,
            'gender'=>$request->gender,
            'image'=>$request->image,
        ]);

        return redirect('teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        File::delete('img/'.$teacher->image);
        $teacher->delete();
        
        return redirect('teacher');
    }
}
