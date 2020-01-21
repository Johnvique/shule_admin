<?php

namespace App\Http\Controllers;

use App\Bog;
use Illuminate\Http\Request;
use File;

class BogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bogs = Bog::all();
        return view('dashboard/bog',compact('bogs'));
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


        $bogs = new Bog;
        $bogs->name=$request->get ('name'); 
        $bogs->email=$request->get ('email'); 
        $bogs->phone=$request->get ('phone'); 
        $bogs->id_no=$request->get ('id_no'); 
        $bogs->location=$request->get ('location'); 
        $bogs->role=$request->get ('role'); 
        $bogs->gender=$request->get ('gender');
        $bogs->image = $fileNameToStore; 

        $bogs->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bog  $bog
     * @return \Illuminate\Http\Response
     */
    public function show(Bog $bog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bog  $bog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bog = Bog::find($id);
        return view('dashboard/actions/edit_bog',compact('bog'));

        return redirect('bog');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bog  $bog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $bog= Bog::find($id);
        $bog->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_no'=>$request->id_no,
            'location'=>$request->location,
            'role'=>$request->role,
            'gender'=>$request->gender,
            'image'=>$request->image,
        ]);

        return redirect('bog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bog  $bog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bog= Bog::find($id);
        file::delete('img/'.$bog->image);
        $bog->delete();
        
        return redirect('bog');
    }
}
